<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class department extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'FacultyId'
    ];

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    } 

    public function courses() : HasMany 
    {
        return $this->hasMany(Course::class);
    }
}
