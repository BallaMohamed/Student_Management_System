<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function level(){
    	return $this->belongsTo(Level::class);
    }

    public function teacher(){
    	return $this->belongsTo(Teacher::class);
    }

    public function department(){
    	return $this->belongsTo(Department::class);
    }
}
