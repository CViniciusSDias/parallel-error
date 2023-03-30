FROM php:8.2-zts

RUN pecl install parallel
RUN docker-php-ext-enable parallel
