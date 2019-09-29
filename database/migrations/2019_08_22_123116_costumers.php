<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Costumers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumers_module', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nama");
            $table->string("no_ktp")->unique();
            $table->string("alamat");
            $table->string("no_hp")->unique();
            $table->string("email")->nullable();
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
        Schema::dropIfExists('costumers_module');
    }
}
