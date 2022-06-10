FROM php:8.1.7-fpm

RUN docker-php-ext-install pdo pdo_mysql
