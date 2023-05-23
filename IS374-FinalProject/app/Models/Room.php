<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey='RoomNumber';
    public $incrementing = false;

    protected $fillable = [
        'RoomNumber',
        'MaxCapacity'
    ];
    
    public function section(): HasOne
    {
        return $this->hasOne(Section::class);
    }
}
