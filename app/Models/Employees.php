<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $fillable = ['firstName', 'lastName', 'phone', 'description', 'city', 'timeStart', 'timeEnd', 'photo', 'position'];
    public $table = 'employees';
    public $timestamps = false;
}
