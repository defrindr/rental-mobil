<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil_module', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("merk");
            $table->string("plat_nomer")->unique();
            $table->bigInteger("harga");
            $table->string('image')->nullable();
            $table->boolean("status");
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
        Schema::dropIfExists("mobil_module");
    }
}
