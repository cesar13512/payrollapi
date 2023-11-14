<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
    'bioid', 
    'name', 
    'position', 
    'rate', 
    'cola', 
    'department', 
    'subdepartment', 
    'subsubdepartment', 
    'dm',
    'assign'
    ];
    


    public function payrolls(){
        return $this->hasMany(Payroll::class);
    }

    

    public function schedules(){
        return $this->hasMany(Schedule::class);
    }
}
