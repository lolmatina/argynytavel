<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'rate', 'price', 'country_id'];
    public $table = 'hotels';
    public $timestamps = false;
}
