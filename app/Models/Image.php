<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['land_record_id', 'image_url'];

    // Define the inverse relationship
    public function landRecord(): BelongsTo
    {
        return $this->belongsTo(LandRecords::class, 'land_record_id');
    }
}
