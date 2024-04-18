<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferCountry extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'preview', 'image', 'hotels', 'offers', 'offer', 'preview_text'];
    public $table = 'offercountry';
}
