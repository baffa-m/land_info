<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('land_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('land_record_id')->constrained('land_records')->onDelete('cascade');
            $table->string('buyer_name');
            $table->string('seller_name');
            $table->string('witness1');
            $table->string('witness2');
            $table->string('witness3');
            $table->date('sale_date');
            $table->decimal('sale_amount', 10, 2);
            $table->string('receipt_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('land_sales');
    }
};
