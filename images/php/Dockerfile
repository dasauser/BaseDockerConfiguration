FROM php:7.2-fpm
RUN docker-php-ext-install -j$(nproc) mysqli pdo_mysql
WORKDIR /var/www
CMD ["php-fpm"]