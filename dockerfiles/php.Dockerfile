# Этап 1: Использование mlocati/php-extension-installer для установки расширений
FROM mlocati/php-extension-installer:latest as installer

# Этап 2: Основной образ с PHP
FROM php:8.2-fpm-alpine

# Устанавливаем рабочую директорию
WORKDIR /var/www/laravel

# Обновление пакетов и установка необходимых зависимостей
RUN apk update && \
    apk add --no-cache \
    bash \
    git \
    rsync \
    libpq \
    postgresql-dev \
    $PHPIZE_DEPS \
    nodejs \
    npm

# Устанавливаем PostgreSQL расширения
RUN docker-php-ext-install pdo_pgsql

# Устанавливаем Redis
RUN pecl install redis && docker-php-ext-enable redis

# Копируем утилиту для установки расширений из первого этапа
COPY --from=installer /usr/bin/install-php-extensions /usr/bin/

# Устанавливаем Xdebug
RUN install-php-extensions xdebug

# Устанавливаем команду по умолчанию
CMD ["php-fpm"]
