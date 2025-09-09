FROM node:20 AS node-builder

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .

RUN npm run build

FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev zip curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN a2enmod rewrite

RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

COPY . .

COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

COPY --from=node-builder /app/public/build ./public/build

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public/build

EXPOSE 80

CMD php artisan migrate --force && apache2-foreground
