<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outfit extends Model
{
    use HasFactory;

    protected $fillable = [
        'ethnic_group_id', 
        'name', 
        'photo', 
        'description', 
        'historical_context', 
        'uses', 
        'used_in_festivals', 
        'used_in_rituals'
    ];

    /**
     * Relationship: Each outfit belongs to one ethnic group.
     */
    public function ethnicGroup()
    {
        return $this->belongsTo(EthnicGroup::class);
    }

    /**
     * Relationship: An outfit has many materials.
     */
    public function materials()
    {
        return $this->hasMany(OutfitMaterial::class);
    }

    /**
     * Relationship: An outfit has many sellers (one seller per row in seller_outfits).
     */
    public function sellers()
    {
        return $this->hasMany(SellerOutfit::class);
    }
}
