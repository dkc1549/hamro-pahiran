<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'contact', 'location', 'verified'];

    public function outfits()
    {
        return $this->belongsToMany(Outfit::class, 'seller_outfits')->withPivot('price', 'stock');
    }
}
