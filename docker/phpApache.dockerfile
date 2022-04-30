from httpd:2.4-alpine
run apk update \
&& apk add \
php8 \
php-fpm
