FROM php:8.2-apache

WORKDIR /var/www/html

# System dependencies + Node 18
RUN apt-get update && apt-get install -y \
    git unzip libonig-dev libzip-dev zip curl libpq-dev \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install pdo_pgsql mbstring zip bcmath \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install PHP dependencies + build frontend
RUN composer install --optimize-autoloader --no-dev \
    && npm install && npm run build \
    && chown -R www-data:www-data storage bootstrap/cache

# Apache settings for Laravel
RUN sed -i 's#/var/www/html#/var/www/html/public#g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]