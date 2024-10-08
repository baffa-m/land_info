<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;


    protected $fillable = [
        'land_type'
    ];


    public function landRecords(): HasMany
    {
        return $this->hasMany(LandRecords::class);
    }

    public function firms(): HasMany
    {
        return $this->hasMany(Firms::class);
    }

}
