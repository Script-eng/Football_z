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
        Schema::create('matchs', function (Blueprint $table) {
            $table->id();
            $table->date('mdate');
            $table->time('startsat');
            $table->decimal('ticketprice', 8, 2);
            $table->string('mtype');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchs');
    }
};
