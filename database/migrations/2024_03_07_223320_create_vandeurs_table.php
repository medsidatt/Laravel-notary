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
        Schema::create('vandeurs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nni')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->date( 'date_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vandeurs');
    }
};
