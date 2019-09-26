FROM php:7.2-fpm-alpine
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    apk add \
    php-common \
    php-mbstring \
    php-xml \
    php-zip \
    php-openssl \
    php-json \
    php-phar \
    php-ctype \
    php-iconv \
    php-dom \
    php-curl
WORKDIR /var/www
CMD ["php-fpm"]