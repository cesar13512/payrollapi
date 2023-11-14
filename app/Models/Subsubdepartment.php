<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsubdepartment extends Model
{
    use HasFactory;

    public function subdepartments(){
     return $this->belongsTo(Subdepartment::class);
   }
}
