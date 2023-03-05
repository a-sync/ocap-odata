<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entity extends Model
{
    use \Awobaz\Compoships\Compoships;

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
     * Get the op that owns the entity.
     */
    public function operation(): BelongsTo
    {
        return $this->belongsTo(Operation::class);
    }

    /**
     * Get the player that owns the entity.
     */
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    /**
     * Get the events associated with the entity.
     */
    public function victim_events(): \Awobaz\Compoships\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Event::class, ['id', 'operation_id'], ['victim_id', 'operation_id']);
    }

    /**
     * Get the events associated with the entity.
     */
    public function attacker_events(): \Awobaz\Compoships\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Event::class, ['id', 'operation_id'], ['attacker_id', 'operation_id']);
    }
}
