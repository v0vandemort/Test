# Используем официальный образ PHP с конкретной версией
FROM php:fpm

RUN docker-php-ext-install pdo pdo_mysql
# Опционально: устанавливаем дополнительные зависимости и настройки PHP
# RUN apt-get update && apt-get install -y ...

# Опционально: устанавливаем дополнительные расширения PHP
# RUN docker-php-ext-install ...

# Опционально: копируем ваши PHP-скрипты и конфигурации в контейнер
COPY ./app /var/www/html
