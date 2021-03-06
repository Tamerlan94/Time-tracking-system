<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function role(){
        return $this->belongsTo(Role::class);
    }

    protected $fillable = [
        'name',
        'role_id'
    ];
}
