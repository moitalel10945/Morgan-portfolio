# -------------------------------
# Laravel + Apache + Node 20 Dockerfile
# Production-ready for Render
# -------------------------------

FROM php:8.2-apache
ENV APP_DEBUG=false
ENV NODE_ENV=production
ENV VITE_DEV_SERVER_URL=

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip libonig-dev libzip-dev zip curl libpq-dev \
    && docker-php-ext-install pdo_pgsql mbstring zip bcmath \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Node 20 separately
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs

# Verify Node & npm are installed
RUN node -v
RUN npm -v

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
RUN npm ci
RUN npm run build

# Apache settings for Laravel
RUN sed -i 's#/var/www/html#/var/www/html/public#g' /etc/apache2/sites-available/000-default.conf \
    && a2enmod rewrite \
    && echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose port 80
EXPOSE 80

# Clear and cache Laravel config, routes, views
CMD php artisan config:cache --no-interaction && \
    php artisan route:cache --no-interaction && \
    php artisan view:clear && \
    apache2-foreground


