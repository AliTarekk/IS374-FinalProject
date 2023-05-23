<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;

    protected $primaryKey = 'StaffId';

    protected $fillable = [
        'Title',
        'EmploymentType',
        'PayRate',
        'Salary',
        'PersonId'
    ];
    
    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
