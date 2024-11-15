<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFypsTable extends Migration
{
    public function up()
    {
        Schema::create('fyps', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->year('year');
            $table->string('department');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fyps');
    }
}
