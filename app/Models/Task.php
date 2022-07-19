<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function project(){
        return $this->hasOne(Project::class);
    }

    public function status(){
        return $this->hasOne(Status::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    protected $fillable = [
        'name',
        'project_id',
        'user_id',
        'status_id',
        'deadline'
    ];
}
