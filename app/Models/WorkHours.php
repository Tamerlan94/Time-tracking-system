<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkHours extends Model
{
    use HasFactory;

    public function task(){
        return $this->hasOne(User::class);
    }

    protected $fillable = [
        'task_id',
        'start_hour',
        'end_hour',
        'date'
    ];
}
