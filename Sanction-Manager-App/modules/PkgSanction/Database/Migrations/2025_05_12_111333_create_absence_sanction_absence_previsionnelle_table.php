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
        Schema::create('absence_sanction_absence_previsionnelle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('absence_id');
            $table->foreign('absence_id', 'fk_abs_id')
                ->references('id')
                ->on('absences')
                ->onDelete('cascade');

            $table->unsignedBigInteger('sanction_absence_previsionnelle_id');
            $table->foreign('sanction_absence_previsionnelle_id', 'fk_sap_id')
                ->references('id')
                ->on('sanction_absence_previsionnelles')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absence_sanction_absence_previsionnelle');
    }
};
