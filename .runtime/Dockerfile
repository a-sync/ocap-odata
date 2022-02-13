FROM trafex/php-nginx

USER root

RUN apk add --no-cache php8-tokenizer php8-pdo_mysql

COPY ./nginx.conf /etc/nginx/nginx.conf

USER nobody
