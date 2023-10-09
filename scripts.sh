#!/bin/bash
php artisan key:generate && \
php artisan migrate --force && \
php artisan config:cache &&\
apache2ctl -D FOREGROUND