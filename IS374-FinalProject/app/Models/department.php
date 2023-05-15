<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
