<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class department extends Model
{
    use HasFactory;

    protected $primaryKey = 'DepartmentId';

    protected $fillable = [
        'Name',
        'FacultyId'
    ];

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class, 'FacultyId');
    } 

    public function courses() : HasMany 
    {
        return $this->hasMany(Course::class);
    }
}
