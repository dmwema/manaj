<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmplayesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplayes', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('names');
            $table->string('poste');
            $table->string('facebook')->nullable();
            $table->string('phone')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->text('desc')->nullable();
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
        Schema::dropIfExists('emplayes');
    }
}
