FROM php:7.3-apache as base

FROM base as dev

FROM base as build
COPY . /var/www/html/
