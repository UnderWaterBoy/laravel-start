FROM php:8.2-fpm-alpine

# Установим рабочую директорию
WORKDIR /var/www/laravel

# Обновление пакетов и установка необходимых зависимостей
RUN apk update && \
    apk add --no-cache \
    bash \
    libpq \
    postgresql-dev \
    $PHPIZE_DEPS

# Устанавливаем PostgreSQL расширения
RUN docker-php-ext-install pdo_pgsql

# Установка Redis
RUN pecl install redis \
    && docker-php-ext-enable redis

# Устанавливаем команду по умолчанию
CMD ["php-fpm"]
