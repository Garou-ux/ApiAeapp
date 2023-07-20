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
        //tabla de abono de eventos
        Schema::create('event_passes', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id')->unsigned()->index(); //relacion a evento
            $table->double('amount', 12, 2)->nullable()->default(0); //importe de abono
            $table->string('voucher_image_path', 2000)->nullable(); //ruta del storage para guardar la imagen del comprobante
            $table->string('comment', 500)->nullable(); //comentario a la nota del abono
            $table->integer('created_by')->unsigned()->nullable()->index(); //usuario que registró el abono
            $table->boolean('active')->nullable()->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_passes');
    }
};
