FROM php:7.4.7-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    libmagickwand-dev --no-install-recommends \
    libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-configure gd -with-freetype \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql pgsql mysqli gd \
    && pecl install imagick xdebug \
	&& docker-php-ext-enable imagick xdebug \
	&& docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD ./config/php.ini /usr/local/etc/php

WORKDIR /var/www

CMD ["/bootstrap/init.sh"]

CMD ["php-fpm"]