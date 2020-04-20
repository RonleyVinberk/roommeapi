<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name', 'created_by', 'updated_by'
    ];
    
    public $timestamps = true;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
