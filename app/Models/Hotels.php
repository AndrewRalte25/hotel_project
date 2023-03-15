<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'Location',
        'Opening Hours',
        'Contact Information',
    ];

    protected $hidden = [
        // 'is_active',
        // 'limit'
    ];

    protected $casts = [
    ];

    public function items()
    {
       
    }
}