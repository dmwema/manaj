<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manajs', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->text('mission');
            $table->text('welcome');
            $table->text('vision');
            $table->text('service_short');
            $table->text('image_text');
            $table->text('lien_mileu_travail_text');
            $table->text('pourquoi_nous_text');
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
        Schema::dropIfExists('manajs');
    }
}
