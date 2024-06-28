<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BoardUniversity extends Model
{
    use HasFactory;

    protected $table = 'board_university';

    protected $fillable = [
        'id',
        'name'
    ];


    /**
     * Get the user that owns the Admission
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
}
