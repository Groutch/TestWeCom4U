<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hikes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('difficulty',100);
            $table->text('intro');
            $table->string('title1',200);
            $table->string('title2',200);
            $table->longText('section1');
            $table->longText('section2');
            $table->text("pic1");
            $table->text("pic2");
            $table->text("pic3");
            $table->text("pic4");
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
        Schema::dropIfExists('hikes');
    }
}
