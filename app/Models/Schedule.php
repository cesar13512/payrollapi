<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // dup.ontime   =  dup.ontime.replace(/\d{4}-\d{2}-\d{2}/, '').replace(/:/g, "");
    // dup.offtime  =  dup.offtime.replace(/\d{4}-\d{2}-\d{2}/, '').replace(/:/g, "");
    // dup.intime   =  dup.intime.replace(/\d{4}-\d{2}-\d{2}/, '').replace(/:/g, "");
    // dup.outtime  =  dup.outtime.replace(/\d{4}-\d{2}-\d{2}/, '').replace(/:/g, "");

    protected $fillable = [
    'employee_id', 
    'ontime', 
    'offtime',   
    'intime',
    'outtime'
    ];
        

        
    public function employees(){
        return $this->belongsTo(Employee::class);
    }
}
