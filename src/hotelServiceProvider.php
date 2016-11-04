<?php

namespace ftravel\hotel;

use Illuminate\Support\ServiceProvider;

class hotelServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
      // $this->app->bind(ftravel\hotel\Message::class);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
     public function register()
     {
         $this->app['message'] = $this->app->share(
             function ($app) {
                 return new Message();
             }
         );
     }

     /**
      * Get the services provided by the provider.
      *
      * @return string[]
      */
     public function provides()
     {
         return ['message'];
     }
}
