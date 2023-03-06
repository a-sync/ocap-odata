<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Flat3\Lodata\Attributes\LodataRelationship;

class Event extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

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
     * Get the op of the event.
     */
    #[LodataRelationship]
    public function operation(): BelongsTo
    {
        return $this->belongsTo(Operation::class);
    }

    /**
     * Get the victim entity associated with the event.
     */
    #[LodataRelationship]
    public function victim(): BelongsTo
    {
        return $this->belongsTo(Entity::class, 'victim_aid', 'aid');
    }

    /**
     * Get the attacker entity associated with the event.
     */
    #[LodataRelationship]
    public function attacker(): BelongsTo
    {
        return $this->belongsTo(Entity::class, 'attacker_aid', 'aid');
    }

    /**
     * Get the victim player associated with the event.
     */
    #[LodataRelationship]
    public function victim_player(): HasOneThrough
    {
        return $this->hasOneThrough(
            Player::class,
            Entity::class,
            'aid',
            'id',
            'victim_aid',
            'player_id',
        );
    }

    /**
     * Get the attacker player associated with the event.
     */
    #[LodataRelationship]
    public function attacker_player(): HasOneThrough
    {
        return $this->hasOneThrough(
            Player::class,
            Entity::class,
            'aid',
            'id',
            'attacker_aid',
            'player_id',
        );
    }
}
