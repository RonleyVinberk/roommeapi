<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'building_id', 'name', 'description', 'created_at', 'created_by', 'updated_at', 'updated_by'
    ];
    
    public $timestamps = true;
}
