@servers(['web' => 'bitnami@34.205.23.124'])

@task('deploy', ['on' => 'web'])
    cd /opt/bitnami/web/app-1
    git pull origin master

    composer dump-autoload

    php artisan cache:clear
    php artisan view:clear
    php artisan config:clear
    php artisan route:clear
    php artisan event:clear

    php artisan view:cache
    php artisan config:cache
    php artisan route:cache
    php artisan event:cache
@endtask
