# PPI
composer install;

php artisan optimize:clear;

composer dump-autoload;

php artisan key:generate;

php artisan storage:link;
