FROM trafex/php-nginx:3.0.0

USER root

RUN apk add --no-cache php81-tokenizer php81-pdo_mysql php81-fileinfo

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./default.conf /etc/nginx/conf.d/default.conf

USER nobody
