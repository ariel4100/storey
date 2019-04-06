<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image')->nullable();
            $table->text('icon')->nullable();
            $table->text('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('text')->nullable();
            $table->string('ficha')->nullable();
            $table->string('section')->nullable();
            $table->string('type')->nullable();
            $table->string('order')->nullable();
            $table->boolean('remove')->default(true);
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
        Schema::dropIfExists('contents');
    }
}
