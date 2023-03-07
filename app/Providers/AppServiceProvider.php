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
        Lodata::discover(\App\Models\Event::class);
        Lodata::discover(\App\Models\Player::class);

        $operationType = Lodata::getEntityType('Operation');
        $operationType->getProperty('world_name')->setSearchable(true);
        $operationType->getProperty('mission_name')->setSearchable(true);
        $operationType->getProperty('filename')->setSearchable(true);
        $operationType->getProperty('tag')->setSearchable(true);
        $operationType->getProperty('mission_author')->setSearchable(true);
        $operationType->getProperty('end_winner')->setSearchable(true);
        $operationType->getProperty('end_message')->setSearchable(true);

        // $timestampType = Lodata::getEntityType('Timestamp');

        $entityType = Lodata::getEntityType('Entity');
        $entityType->getProperty('group_name')->setSearchable(true);
        $entityType->getProperty('name')->setSearchable(true);
        $entityType->getProperty('role')->setSearchable(true);
        $entityType->getProperty('class')->setSearchable(true);

        $eventType = Lodata::getEntityType('Event');
        $eventType->getProperty('weapon')->setSearchable(true);
        $eventType->getProperty('data')->setSearchable(true);

        $playerType = Lodata::getEntityType('Player');
        $playerType->getProperty('name')->setSearchable(true);
    }
}
