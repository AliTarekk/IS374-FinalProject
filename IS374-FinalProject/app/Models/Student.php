<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function enrolls(): HasMany
    {
        return $this->hasMany(enrolls::class);
    }

}
