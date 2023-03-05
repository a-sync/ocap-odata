<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Flat3\Lodata\Attributes\LodataRelationship;

class Operation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'operations';

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
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'date',
        'updated' => 'timestamp',
        'start_time' => 'datetime',
        'capture_delay' => 'float'
    ];

    /**
     * The ops that belong to the user.
     */
    #[LodataRelationship]
    public function players(): BelongsToMany
    {
        return $this->belongsToMany(Player::class, 'entities', 'operation_id', 'player_id');
    }

    /**
     * Get the timestamps associated with the op.
     */
    #[LodataRelationship]
    public function timestamps(): HasMany
    {
        return $this->hasMany(Timestamp::class);
    }

    /**
     * Get the entities associated with the op.
     */
    #[LodataRelationship]
    public function entities(): HasMany
    {
        return $this->hasMany(Entity::class);
    }

    /**
     * Get the events associated with the op.
     */
    #[LodataRelationship]
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
