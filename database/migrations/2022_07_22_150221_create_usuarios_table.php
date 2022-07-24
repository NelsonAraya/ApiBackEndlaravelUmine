<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->string('dv',1);
            $table->string('nombres',100);
            $table->string('apellidop',100);
            $table->string('apellidom',100);
            $table->integer('telefono')->nullable();
            $table->string('email')->unique()->nullable();
            $table->enum('estado',['A','I'])->default('A');
            $table->integer('colegio_id')->unsigned();
            $table->foreign('colegio_id')->references('id')->on('colegios');
            $table->string('password');
            $table->timestamps();
            $table->rememberToken();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
