FROM php:8.0.3-fpm

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update \
 && apt-get install -y libmcrypt-dev libzip-dev libpq-dev libonig-dev git supervisor nano iputils-ping netcat \
 && apt-get install -y ghostscript libmagickwand-dev --no-install-recommends \
 && chsh -s /bin/bash www-data \
 && echo "www-data:www-data" | chpasswd

RUN install-php-extensions http redis sockets pcntl zip pgsql pdo_pgsql
RUN install-php-extensions mysqli pdo_mysql

WORKDIR /var/www
