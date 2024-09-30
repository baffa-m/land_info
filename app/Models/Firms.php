<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Firms extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'description',
        'type_id',
        'contact_email',
        'phone_number',
        'website_url',
        'address',
        'state',
        'logo_url',
        'year_established',
        'services_offered',
        'is_active',
    ];

    // Define the relationship to categories
    public function type():BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
