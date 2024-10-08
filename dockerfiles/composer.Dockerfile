# dockerfiles/composer.Dockerfile
FROM composer:latest

WORKDIR /var/www/laravel

# Устанавливаем зависимости при запуске контейнера
ENTRYPOINT ["composer"]