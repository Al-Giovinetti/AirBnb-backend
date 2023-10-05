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
        Schema::create('apartments', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->text('description');
            $table->text('image');
            $table->string('region');
            $table->string('city');
            $table->string('address')->unique();
            $table->unsignedTinyInteger('beds');
            $table->float('nightly_rate',3,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
