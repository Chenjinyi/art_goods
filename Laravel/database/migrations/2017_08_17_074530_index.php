<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Index extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('brand');
            $table->string('message');
            $table->string('message_2');
            $table->string('viedo_name');
            $table->string('viedo');
            $table->string('image_name');
            $table->string('image');
            $table->string('contact_name');
            $table->string('contact');
            $table->string('heading');
            $table->text('content');
            $table->string('heading_2');
            $table->text('content_2');
            $table->string('heading_3');
            $table->text('content_3');
            $table->string('footer');
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
        Schema::dropIfExists('index');
    }
}
