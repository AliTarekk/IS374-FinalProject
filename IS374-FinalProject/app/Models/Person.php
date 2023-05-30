<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Person extends Model
{
    use HasFactory;

    protected $primaryKey='PersonId';

    protected $fillable = [
        'FirstName',
        'LastName',
        'email',
        'Birthdate',
        'PersonType',
        'Gender'
    ];

}
