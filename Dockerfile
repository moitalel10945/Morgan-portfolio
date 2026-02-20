# Use official PHP 8.2 Apache image
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies and Node 18
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libonig-dev \
    libzip-dev \
    zip \
    curl \
    libpq-dev \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install pdo_pgsql mbstring zip bcmath \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install PHP dependencies and build frontend assets
RUN composer install --optimize-autoloader --no-dev \
    && npm install && npm run build \
    && chown -R www-data:www-data storage bootstrap/cache

# Expose Apache port
EXPOSE 80

# Start Apache (Render will handle routing)
CMD ["apache2-foreground"]