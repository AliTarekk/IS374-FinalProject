<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'CourseCode';

    protected $fillable = [
        'CreditHours',
        'MinStudents',
        'CourseTitle',
        'DepartmentId',
        // 'CoordinatorId'
    ];

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
    public function deparment(): BelongsTo
    {
        return $this->belongsTo(department::class);
    }
    
}
