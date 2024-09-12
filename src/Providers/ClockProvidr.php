<?php

namespace Cre\Clock\Providers;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;


class ClockProvidr extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
      //  $this->app['clock']=$this->app->share(function ($app) {
      //      return new Clock();
      //  });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::middleware('web')->group(__DIR__.'/../Routes/web.php');

        // composer dump-autoload
        // اعادة تحميل ملفات المشروع
        // php artisan vendor:publish
        // نسخ ملفات
        if(!file_exists(base_path('config').'/set_clock.php'))
        $this->publishes([__DIR__.'../tools'=> base_path('config')]);

        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'clock');
    }
}
