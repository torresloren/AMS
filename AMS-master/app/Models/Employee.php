<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name','schedule_id', 'position', 'email','pin_code'];
    public function schedules(){
        return $this->belongsTo(Schedule::class);
    }
}
