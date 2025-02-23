<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('outfits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ethnic_group_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('photo')->nullable();
            $table->text('description')->nullable();
            $table->text('historical_context')->nullable();
            $table->text('uses')->nullable();
            $table->boolean('used_in_festivals')->default(false);
            $table->boolean('used_in_rituals')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outfits');
    }
};
