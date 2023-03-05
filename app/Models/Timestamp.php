<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Timestamp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'timestamps';

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'datetime',
        'sys_time_utc' => 'datetime',
        'time' => 'float',
        'time_multipler' => 'float'
    ];

    /**
     * Get the op that owns the timestamp.
     */
    public function operation(): BelongsTo
    {
        return $this->belongsTo(Operation::class);
    }
}
