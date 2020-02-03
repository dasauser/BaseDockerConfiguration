FROM php:7.2-fpm

#RUN docker-php-ext-install -j$(nproc) mysqli pdo_mysql

RUN pecl install xdebug-2.8.0 \
	&& docker-php-ext-enable xdebug 

ADD ./php.ini /var/www/docker/images/php/php.ini

WORKDIR /var/www

CMD ["php-fpm"]