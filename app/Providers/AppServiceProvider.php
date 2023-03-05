<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Flat3\Lodata\Facades\Lodata;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Lodata::discover(\App\Models\Operation::class);
        Lodata::discover(\App\Models\Timestamp::class);
        Lodata::discover(\App\Models\Entity::class);
        Lodata::discover(\App\Models\Player::class);
        Lodata::discover(\App\Models\Event::class);
    }
}
