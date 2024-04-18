<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    use HasFactory;
    public    $timestamps = false;
    public    $table      = 'offers';
    protected $fillable   = ['name', 'description', 'info', 'additionalInfo', 'bookingStart', 'bookingEnd', 'livingStart', 'livingEnd', 'country_id'];
}
