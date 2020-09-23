ARG PHP_EXTENSIONS="apcu bcmath gd"
FROM thecodingmachine/php:7.4-v3-slim-apache as php_base
WORKDIR /var/www/html
ENV TEMPLATE_PHP_INI=production \
    APP_ENV=prod \
    APACHE_DOCUMENT_ROOT=public/
