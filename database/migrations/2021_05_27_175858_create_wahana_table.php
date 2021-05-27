<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWahanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wahana', function (Blueprint $table) {
            $table->id('id_wahana');
            $table->foreignId('id_wisata');
            $table->string('nama_wahana');
            $table->integer('harga');
            $table->text('gambara');
            $table->text('gambarb');
            $table->longText('deskripsi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wahana');
    }
}
