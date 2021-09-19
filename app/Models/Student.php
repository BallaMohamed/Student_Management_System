<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
   protected $guarded = [];
    public function department(){
    	return $this->belongsTo(Department::class);
    }

   public function level(){
   	return $this->belongsTo(Level::class);
   }

   public function activities(){
   	   return $this->belongsToMany(Activity::class);
   }
  
}
