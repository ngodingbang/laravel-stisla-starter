web: vendor/bin/heroku-php-apache2 public/
sqs: php artisan queue:restart && php artisan queue:work --tries=3
