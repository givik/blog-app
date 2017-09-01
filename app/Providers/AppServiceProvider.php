<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('sidebar', function($view){
         $view->with('archives', \App\Post::archives());
      });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // App::bind | App::singleton
        $this->app->singleton('App\Billing\Stripe', function() {
            return new \App\Billing\Stripe(config('services.stripe.secret'));
        });

        // App::make | resolve()
        // $stripe = \App::make('App\Billing\Stripe');
        // dd($stripe);
    }
}
