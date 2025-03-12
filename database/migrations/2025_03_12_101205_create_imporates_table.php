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
        Schema::create('imporates', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('amwal_type');
            $table->string('Tkhlaya_Az_tareq');
            $table->string('bar_ba');
            $table->string('company_name');
            $table->string('number_act');
            $table->string('number_car');
            $table->string('number_code');
            $table->string('date');
            $table->string('product_type');
            $table->string('product_name');
            $table->string('maoda');
            $table->string('morawaga');
            $table->string('wigth_by_kg');
            $table->string('wigth_tan');
            $table->string('price_by_kg');
            $table->string('takhlaya_date')->nullable();
            $table->string('representativ_name')->nullable();
            $table->string('bar_chalany')->nullable();
            $table->string('bar_nama_number')->nullable();
            $table->string('send_date')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('send_number_car')->nullable();
            $table->string('send_maoda')->nullable();
            $table->string('send_morawaga')->nullable();
            $table->string('send_wigth_by_kg')->nullable();
            $table->string('send_wigth_tan')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imporates');
    }
};
