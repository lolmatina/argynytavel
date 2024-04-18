<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'flag', 'requirements', 'visa', 'description', 'capital', 'currency', 'time', 'language', 'climate', 'location', 'image'];
    public $table = 'countries';
    public $timestamps = false;
}
