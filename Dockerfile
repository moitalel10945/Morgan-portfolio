FROM php:8.2-apache

ENV APP_ENV=production
ENV APP_DEBUG=false
ENV NODE_ENV=production
ENV VITE_DEV_SERVER_URL=

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git unzip libonig-dev libzip-dev zip curl libpq-dev \
    && docker-php-ext-install pdo_pgsql mbstring zip bcmath \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

# ✅ FIXED: proper Laravel directories
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

# ✅ FIXED: permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

RUN composer install --no-dev --optimize-autoloader

RUN npm ci --include=dev
RUN npm run build

RUN sed -i 's#/var/www/html#/var/www/html/public#g' /etc/apache2/sites-available/000-default.conf \
    && a2enmod rewrite \
    && echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 80

COPY start.sh /start.sh
RUN chmod +x /start.sh

CMD ["/start.sh"]