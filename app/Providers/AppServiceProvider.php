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

        //$playerType = Lodata::getEntityType('player');
        //$playerType->addProperty( new CmdRivals( 'rivals', Type::string() ) );

        //todo: add searchable fields
        // $airportType = Lodata::getEntityType(\App\Models\Operation::class);
        // $airportType->getProperty('mission_name')->setSearchable();
        // $airportType->getProperty('mission_author')->setSearchable();

    }
}
