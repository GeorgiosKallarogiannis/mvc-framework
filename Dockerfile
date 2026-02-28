FROM php:8.5.3-apache
RUN docker-php-ext-install pdo pdo_mysql
COPY ./src /var/www/html
USER www-data