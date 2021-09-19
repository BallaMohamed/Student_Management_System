<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function students(){
    	return $this->belongsToMany(Student::class);
    }

    public function teacher(){
    	return $this->belongsTo(Teacher::class);
    }
}