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
        Schema::create('shortsize_buildings', function (Blueprint $table) {
            $table->id();
            $table->timestamp('time');
            $table->string('ppc');
            $table->string('spec');
            $table->string('type');
            $table->string('size');
            $table->string('ucr');
            $table->string('ucrLot');
            $table->string('ucrTebal');
            $table->string('cord');
            $table->string('cordLot');
            $table->string('cordPitch');
            $table->string('cordTension');
            $table->string('adr');
            $table->string('adrLot');
            $table->string('adrTebal');
            $table->string('ocr')->nullable();
            $table->string('ocrLot')->nullable();
            $table->string('ocrTebal')->nullable();
            $table->string('slab1')->nullable();
            $table->string('slab2')->nullable();
            $table->string('slab3')->nullable();
            $table->string('slab4')->nullable();
            $table->string('slab5')->nullable();
            $table->string('slab6')->nullable();
            $table->string('coresTebal1');
            $table->string('coresTebal2');
            $table->string('coresTebal3');
            $table->string('coresLebar1');
            $table->string('coresLebar2');
            $table->string('coresLebar3');
            $table->string('coresPanjang1');
            $table->string('coresPanjang2');
            $table->string('coresPanjang3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shortsize_buildings');
    }
};
