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
        Schema::create('absence_sanction_absence', function (Blueprint $table) {
            $table->id();
            $table->foreignId('absence_id')->constrained()->onDelete('cascade');
            $table->foreignId('sanction_absence_id')->constrained()->onDelete('cascade');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absence_sanction_absence');
    }
};
