FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    libmagickwand-dev --no-install-recommends \
    libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql pgsql mysqli \
    && pecl install imagick xdebug \
	&& docker-php-ext-enable imagick xdebug

ADD ./php.ini /usr/local/etc/php

WORKDIR /src

CMD ["php-fpm"]