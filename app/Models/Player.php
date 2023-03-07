<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Flat3\Lodata\Attributes\LodataRelationship;

class Player extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'players';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the ops that the user belongs to.
     */
    #[LodataRelationship]
    public function operations(): BelongsToMany
    {
        return $this->belongsToMany(Operation::class, 'entities', 'player_id', 'operation_id');
    }

    /**
     * Get the player this alias belongs to.
     */
    #[LodataRelationship]
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'id', 'alias_of');
    }

    /**
     * Get the aliases of this player.
     */
    #[LodataRelationship]
    public function aliases(): HasMany
    {
        return $this->hasMany(Player::class, 'id', 'alias_of');
    }

    /**
     * Get the entities associated with the player.
     */
    #[LodataRelationship]
    public function entities(): HasMany
    {
        return $this->hasMany(Entity::class);
    }

    /**
     * Get the events associated with the player as victim.
     */
    #[LodataRelationship]
    public function victim_events(): HasManyThrough
    {
        return $this->hasManyThrough(
            Event::class,
            Entity::class,
            'player_id',
            'victim_aid',
            'id',
            'aid'
        );
    }

    /**
     * Get the events associated with the player as attacker.
     */
    #[LodataRelationship]
    public function attacker_events(): HasManyThrough
    {
        return $this->hasManyThrough(
            Event::class,
            Entity::class,
            'player_id',
            'attacker_aid',
            'id',
            'aid'
        );
    }
}
