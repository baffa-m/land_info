<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LandRecords extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'nationality',
        'block_no',
        'plot_no',
        'plot_size',
        'occupancy_no',
        'price',
        'receipt_url',
        'additional_info',
        'is_available',
        'user_id'
    ];



    public function landSales(): HasMany
    {
        return $this->hasMany(LandSales::class);
    }

    public function types(): HasOne
    {
        return $this->hasOne(Type::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'land_record_id');
    }
}
