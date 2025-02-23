<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    use HasFactory;
    protected $fillable = ['ethnic_group_id', 'name', 'photo', 'description', 'historical_context', 'uses'];

    public function ethnicGroup()
    {
        return $this->belongsTo(EthnicGroup::class);
    }

    public function materials()
    {
        return $this->hasMany(OutfitMaterial::class);
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'seller_outfits')->withPivot('price', 'stock');
    }
}
