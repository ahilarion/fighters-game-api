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
        Schema::create('classes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('display_name');
            $table->integer('default_attack')->default(0);
            $table->integer('default_defense')->default(0);
            $table->integer('default_dodge')->default(0);
            $table->integer('default_strength')->default(0);
            $table->integer('default_dexterity')->default(0);
            $table->integer('default_constitution')->default(0);
            $table->integer('default_intelligence')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
