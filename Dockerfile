# -------------------------------
# Laravel + Apache + Node 20 Dockerfile
# Production-ready for Render
# -------------------------------

FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies + Node 20
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libonig-dev \
    libzip-dev \
    zip \
    curl \
    libpq-dev \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install pdo_pgsql mbstring zip bcmath \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Ensure storage and bootstrap/cache exist and are writable
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Install PHP dependencies (no dev) and optimize autoloader
RUN composer install --no-dev --optimize-autoloader

# Install frontend dependencies and build assets
RUN npm install
RUN npm run build

# Clear and cache Laravel config, routes, views
RUN php artisan config:clear --no-interaction \
    && php artisan cache:clear --no-interaction \
    && php artisan route:clear --no-interaction \
    && php artisan view:clear --no-interaction \
    && php artisan config:cache --no-interaction \
    && php artisan route:cache --no-interaction

# Apache settings for Laravel
RUN sed -i 's#/var/www/html#/var/www/html/public#g' /etc/apache2/sites-available/000-default.conf \
    && a2enmod rewrite \
    && echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]