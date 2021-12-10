<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSection4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section4s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('satuan');
            $table->string('price');
            $table->string('feature1');
            $table->string('feature2');
            $table->string('feature3');
            $table->string('feature4');
            $table->string('feature5');
            $table->string('feature6');
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
        Schema::dropIfExists('section4s');
    }
}
