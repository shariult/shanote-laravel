FROM richarvey/nginx-php-fpm:3.1.6

# Copy app files to the container
COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel production config
ENV APP_ENV production
ENV APP_DEBUG false
ENV COMPOSER_ALLOW_SUPERUSER 1

# Start script
CMD ["/start.sh"]
