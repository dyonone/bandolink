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
        Schema::create('cementings', function (Blueprint $table) {
            $table->id();
            $table->time('time');
            $table->string('jenisCord');
            $table->string('lotSupplier');
            $table->string('expDate');
            $table->string('jenisLem');
            $table->string('lotLem');
            $table->string('lotCementing');
            $table->string('code');
            $table->string('operator');
            $table->string('output');
            $table->boolean('terpakai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cementings');
    }
};
