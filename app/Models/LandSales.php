<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LandSales extends Model
{
    use HasFactory;

    protected $fillable = [
        'land_record_id',
        'buyer_name',
        'seller_name',
        'witness1',
        'witness2',
        'witness3',
        'sale_date',
        'sale_amount',
        'receipt_url'
    ];

    public function landRecord(): BelongsTo
    {
        return $this->belongsTo(LandRecords::class);
    }
}
