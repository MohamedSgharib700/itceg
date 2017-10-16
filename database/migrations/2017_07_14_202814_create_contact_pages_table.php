<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contact_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title1');
            $table->string('content');
            $table->string('title2');
            $table->string('title3');
            $table->integer('address1');
            $table->integer('address2');
            $table->integer('phone1');
            $table->integer('phone2');
            $table->string('email1');
            $table->string('email2');
            $table->string('title4');
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
        //
    }
}
