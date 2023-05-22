<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = "StudentId";

    protected $fillable = [
        'GPA',
        'HoursAchieved',
        'AdvisorId',
        'PersonId'
    ];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'enrolls', 'StudentId', 'CourseCode')->withPivot([
            'StudentId','Grade','FirstMidterm','SecondMidterm','CourseWork', //, 'created_at', 'updated_at'
        ])->withTimestamps();
    }

}
