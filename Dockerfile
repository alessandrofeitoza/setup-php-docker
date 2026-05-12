FROM php:8.5-fpm

RUN apt-get update && apt-get install -y \
    nginx \
    curl \
    zip \
    unzip \
    git \
    libzip-dev \
    curl \
    && docker-php-ext-install pdo pdo_mysql zip

WORKDIR /var/www

COPY . .

COPY ./docker/nginx/default.conf /etc/nginx/conf.d/default.conf

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data /var/www

EXPOSE 80

CMD service nginx start && php-fpm