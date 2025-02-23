<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutfitMaterial extends Model
{
    use HasFactory;

    protected $fillable = ['outfit_id', 'material_name', 'description'];

    public function outfit()
    {
        return $this->belongsTo(Outfit::class);
    }
}
