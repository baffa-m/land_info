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
        Schema::create('land_records', function (Blueprint $table) {
            $table->id();
            $table->string('app_no')->unique();
            $table->date('date');
            $table->string('name');
            $table->string('address');
            $table->string('state');
            $table->string('nationality');
            $table->string('occupation');
            $table->string('block_no');
            $table->string('plot_no');
            $table->string('plot_size');
            $table->string('lga');
            $table->string('occupancy_no');
            $table->decimal('amount_paid', 10, 2);
            $table->string('receipt_no');
            $table->string('land_use');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('land_records');
    }
};
