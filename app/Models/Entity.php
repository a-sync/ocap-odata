<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HasCompositePrimaryKey;

class Entity extends Model
{
    use HasFactory;
    use HasCompositePrimaryKey;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $connection = 'ocap-stats';
}
