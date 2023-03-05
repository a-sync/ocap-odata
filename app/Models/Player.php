<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
     * Get the ops that belong to the user.
     */
    public function operations(): BelongsToMany
    {
        return $this->belongsToMany(Operation::class, 'entities', 'player_id', 'operation_id');
    }

    /**
     * Get the player associated with this alias.
     */
    public function player(): HasOne
    {
        return $this->hasOne(Player::class, 'id', 'alias_of');
    }

    /**
     * Get the entities associated with the player.
     */
    public function entities(): HasMany
    {
        return $this->hasMany(Entity::class);
    }
}
