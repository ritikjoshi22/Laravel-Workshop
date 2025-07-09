<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', "roll_no", "class", "gender", "date_of_birth"];
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
