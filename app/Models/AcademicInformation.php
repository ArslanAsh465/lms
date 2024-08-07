<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AcademicInformation extends Model
{
    use HasFactory;
    protected $table = 'academic_information';
    protected $fillable = [
        'user_id',
        'qualification',
        'board_university_id',
        'roll_no',
        'total_marks',
        'obtained_marks',
        'degree_exam_year',
        'image',
        'other'
    ];
    /**
     * Get the user that owns the AcademicInformation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    /**
     * Get the user that owns the AcademicInformation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function BoardUniversity(): BelongsTo
    {
        return $this->belongsTo(BoardUniversity::class, 'board_university_id');
    }
}
