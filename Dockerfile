FROM php:8.5-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    nginx \
    curl \
    zip \
    unzip \
    git \
    libzip-dev \
    curl \
    && docker-php-ext-install pdo pdo_mysql zip


COPY docker/nginx/default.conf /etc/nginx/sites-available/default
RUN ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# Garante que o diretório de logs do nginx exista e tenha permissão
RUN mkdir -p /var/log/nginx && chown -R www-data:www-data /var/log/nginx

WORKDIR /app
COPY . .
RUN chown -R www-data:www-data /app

EXPOSE 80

# Script rápido para rodar os dois
CMD php-fpm -D && nginx -g "daemon off;"