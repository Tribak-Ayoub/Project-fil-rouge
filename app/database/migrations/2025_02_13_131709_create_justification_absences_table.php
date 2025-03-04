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
        Schema::create('justification_absences', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_valid')->default(false);
            $table->foreignId('absence_id')->constrained('absences')->onDelete('cascade');
            $table->text('justif_absence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('justification_absences');
    }
};
