<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunlerTable extends Migration
{
    public function up()
    {
        Schema::create('urunler', function (Blueprint $table) {
            $table->id();
            $table->string('isim');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('urunler');
    }
}
?>