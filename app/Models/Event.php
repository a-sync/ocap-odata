<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
     * Get the op that owns the entity.
     */
    #[LodataRelationship]
    public function operation(): BelongsTo
    {
        return $this->belongsTo(Operation::class);
    }

    // /**
    //  * Get the victim associated with the event.
    //  */
    // #[LodataRelationship]
    // public function victim(): \Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo
    // {
    //     return $this->belongsTo(Entity::class, ['id', 'operation_id'], ['victim_id', 'operation_id']);
    // }

    // /**
    //  * Get the attacker associated with the event.
    //  */
    // #[LodataRelationship]
    // public function attacker(): \Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo
    // {
    //     return $this->belongsTo(Entity::class, ['id', 'operation_id'], ['attacker_id', 'operation_id']);
    // }
}
