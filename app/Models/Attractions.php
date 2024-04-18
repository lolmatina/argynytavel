<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attractions extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'country_id'];
    public $table = 'attractions';
    public $timestamps = false;
}
