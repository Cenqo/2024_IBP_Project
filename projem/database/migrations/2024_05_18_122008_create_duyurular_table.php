<?php
// database/migrations/2024_05_19_create_duyurular_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuyurularTable extends Migration
{
    public function up()
    {
        Schema::create('duyurular', function (Blueprint $table) {
            $table->id();
            $table->string('baslik');
            $table->text('icerik');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('duyurular');
    }
}
?>