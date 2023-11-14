<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheduleblocks extends Model
{
    use HasFactory;

    protected $fillable = [
    'ontime', 
    'offtime',   
    'intime',
    'outtime'
    ];
}
