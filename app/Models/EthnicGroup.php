<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EthnicGroup extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image'];

    public function outfits()
    {
        return $this->hasMany(Outfit::class);
    }
}
