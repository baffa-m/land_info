<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LandRecords extends Model
{
    use HasFactory;

    public function landSales(): HasMany
    {
        return $this->hasMany(LandSales::class);
    }

    public function types(): HasOne
    {
        return $this->hasOne(Type::class);
    }
}
