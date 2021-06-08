<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('message');
            //$table->string('status');
            $table->string('addressee');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
