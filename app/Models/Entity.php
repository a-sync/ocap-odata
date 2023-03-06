<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Flat3\Lodata\Attributes\LodataRelationship;

class Entity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'entities';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'aid';

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
     * Get the op of the entity.
     */
    #[LodataRelationship]
    public function operation(): BelongsTo
    {
        return $this->belongsTo(Operation::class);
    }

    /**
     * Get the player of the entity.
     */
    #[LodataRelationship]
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    /**
     * Get the events associated with the entity as victim.
     */
    #[LodataRelationship]
    public function victim_events(): HasMany
    {
        return $this->hasMany(Event::class, 'victim_aid', 'aid');
    }

    /**
     * Get the events associated with the entity as attacker.
     */
    #[LodataRelationship]
    public function attacker_events(): HasMany
    {
        return $this->hasMany(Event::class, 'attacker_aid', 'aid');
    }
}
