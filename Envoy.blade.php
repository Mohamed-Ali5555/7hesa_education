@servers(['web' => ['u351584322@89.117.169.73 -p 65002']])

@story('deploy')
    deploy
@endstory

@task('deploy', ['on' => 'web'])
    cd /home/u351584322/domains/7essaonline.com/public_html
    git pull origin main
    composer2 update
    php artisan optimize:clear
    php artisan optimize
@endtask