FROM php:8.3.7-fpm-alpine
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
RUN composer install
# 使用 SQLite 做測試範例，先不考慮資料庫
RUN php artisan migrate --force
COPY . /app

CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181