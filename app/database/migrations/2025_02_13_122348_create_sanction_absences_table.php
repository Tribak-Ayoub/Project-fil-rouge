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
        Schema::create('sanction_absences', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut');
            $table->string('statut');
            $table->foreignId('apprenant_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('regle_id')->constrained('regles_de_sanctions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanction_absences');
    }
};
