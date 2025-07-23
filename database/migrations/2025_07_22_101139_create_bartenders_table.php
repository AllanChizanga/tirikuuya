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
        Schema::create('bartenders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('couple_id');
            $table->foreignUuid('inventory_id');
            $table->double('size')->nullable();
            $table->double('layby')->nullable();
            $table->enum('status', ['pending','done'])->nullable();
            $table->dateTime('booked_date')->nullable(); //this is the booked date which is also the approved booked date
            $table->text('other_requirements')->nullable(); 
            $table->enum('payment_status', ['authorised','not authorised'])->nullable();
            $table->enum('delivery_status', ['delivered','not delivered'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bartenders');
    }
};
