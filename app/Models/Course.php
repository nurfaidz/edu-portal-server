<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function lecturerCourse()
    {
        return $this->belongsTo(LecturerCourse::class, 'course_id');
    }

    public function schedules()
    {
        return $this->hasManyThrough(Schedule::class, LecturerCourse::class, 'course_id', 'lecturer_course_id');
    }
}
