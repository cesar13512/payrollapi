<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdepartment extends Model
{
    use HasFactory;

    public function departments(){
     return $this->belongsTo(Department::class);
    }

    public function subsubdepartments(){
     return $this->hasMany(Subsubdepartment::class);
    }
}
