FROM php:8.5-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    nginx \
    curl \
    zip \
    unzip \
    git \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

WORKDIR /app

COPY . .

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data /app

EXPOSE 80

CMD service nginx start && php-fpm