<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lecturerCourse()
    {
        return $this->belongsTo(LecturerCourse::class, 'lecturer_course_id', 'id');
    }
}
