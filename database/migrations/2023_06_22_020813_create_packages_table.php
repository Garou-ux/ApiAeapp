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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->index(); //nombre del paquete
            $table->string('description', 500)->nullable(); // descripcion del paquete
            $table->integer('number_of_people')->unsigned()->nullable()->default(0); // cantidad de personas del paquete
            $table->double('time_of_event')->nullable()->default(0); // tiempo del evento
            $table->integer('formal_menu')->unsigned()->nullable()->default(0); //cantidad de entradas del menu
            $table->boolean('soft_drinks')->nullable()->default(false); //Barra libre (Refrescos)
            $table->boolean('pina_colada')->nullable()->default(false); //Barra libre (pina_colada)
            $table->boolean('whisky')->nullable()->default(false);//Barra libre (whisky)
            $table->boolean('civil_ceremony')->nullable()->default(false); //ceremonia civil
            $table->boolean('tasting_menu')->nullable()->default(false); // degustacion del menu
            $table->boolean('table_linen')->nullable()->default(false); // manteleria
            $table->boolean('full_assembly')->nullable()->default(false); //montaje completo
            $table->boolean('service_staff')->nullable()->default(false); // personal de servicio
            $table->boolean('valet_parking')->nullable()->default(false); //estacionamiento
            $table->boolean('light_plant')->nullable()->default(false); //planta de luz
            $table->boolean('customized_coordinator')->nullable()->default(false); //Coordinador personalizado
            $table->string('image_path', 300)->nullable()->index(); //imagen del paquete
            $table->double('price', 12, 2)->nullable()->default(0); //precio del paquete
            $table->boolean('active')->nullable()->default(true);
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
