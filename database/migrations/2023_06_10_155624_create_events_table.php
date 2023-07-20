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
        //tabla que contendrá la info de los eventos
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500)->nullable()->index(); //nombre del evento
            $table->dateTime('date')->nullable()->index(); //fecha el evento
            $table->integer('client_id')->unsigned()->index(); //id del cliente
            $table->integer('package_id')->unsigned()->nullable()->index(); //id del paquete del evento
            $table->integer('status_id')->unsigned()->nullable()->index(); //id del status del evento
            $table->double('subtotal', 12, 2)->nullable()->default(0); //subtotal antes de iva
            $table->double('iva', 12, 2)->nullable()->default(0); //iva
            $table->double('total', 12, 2)->nullable()->default(0); //total del evento, se ira actualizando en base a los adicionales del evento
            $table->double('remaining',12,2)->nullable()->default(0); //restante del evento
            $table->integer('created_by')->unsigned()->nullable()->index(); //usuario que creo el evento
            $table->integer('updated_by')->unsigned()->nullable()->index();//ultimo usuario que lo actualizo
            $table->integer('deleted_by')->unsigned()->nullable()->index(); //usurio que dio de baja el evento
            $table->boolean('active')->nullable()->default(true); //bndera que indica si esta activo el evento junto con deleted_at
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
