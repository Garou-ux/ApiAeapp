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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->nullable()->index(); // id ligado al usuario de tipo cliente
            $table->string('boy_name', 50)->nullable()->index();
            $table->string('boy_paternal_surname', 40)->nullable();
            $table->string('boy_mother_surname',40)->nullable();
            $table->string('girl_name', 50)->nullable()->index();
            $table->string('girl_paternal_surname', 40)->nullable();
            $table->string('girl_mother_surname',40)->nullable();
            $table->string('address',100);
            $table->string('street_number', 100)->nullable();
            $table->string('state',50)->nullable();
            $table->integer('telephone')->unsigned()->nullable()->default(0);
            $table->integer('second_telephone')->unsigned()->nullable()->default(0);
            $table->string('facebook', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('tiktok', 100)->nullable();
            $table->string('ine_id',70)->nullable();
            $table->boolean('active')->nullable()->default(true)->index();
            $table->integer('created_by')->unsigned()->nullable()->index(); // id ligado al usuario que lo creo
            $table->integer('deleted_by')->unsigned()->nullable()->index(); // id ligado al usuario que lo dio de baja
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
