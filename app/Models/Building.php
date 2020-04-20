<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'slug', 'name', 'description', 'created_at', 'created_by', 'updated_at', 'updated_by'
    ];
    
    public $timestamps = true;
}
