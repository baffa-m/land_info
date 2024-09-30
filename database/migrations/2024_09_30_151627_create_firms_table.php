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
        Schema::create('firms', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->text('description')->nullable();
            $table->foreignId('type_id')->constrained('types')->onDelete('cascade'); // Foreign key for category
            $table->string('contact_email');
            $table->string('phone_number');
            $table->string('website_url')->nullable();
            $table->string('address');
            $table->string('state');
            $table->string('logo_url')->nullable();
            $table->year('year_established')->nullable();
            $table->text('services_offered')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firms');
    }
};
