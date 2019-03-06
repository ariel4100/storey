<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo1')->nullable();
            $table->string('titulo2')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('file_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calidads');
    }
}
