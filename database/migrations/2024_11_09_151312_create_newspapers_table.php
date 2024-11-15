<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewspapersTable extends Migration
{
    public function up()
    {
        Schema::create('newspapers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('publication_date');
            $table->string('publisher');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('newspapers');
    }
}
