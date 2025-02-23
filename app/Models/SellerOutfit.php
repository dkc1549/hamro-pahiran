<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerOutfit extends Model
{
    use HasFactory;

    protected $fillable = ['outfit_id', 'seller_name', 'seller_contact', 'seller_address', 'price', 'stock'];

    public function outfit()
    {
        return $this->belongsTo(Outfit::class);
    }
}
