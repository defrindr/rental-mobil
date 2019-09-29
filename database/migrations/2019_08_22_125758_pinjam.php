<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam_module', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("id_mobil");
            $table->unsignedBigInteger("id_costumer");
            $table->timestamp("tanggal_pinjam")->useCurrent();
            $table->timestamp("tanggal_kembali")->nullable();
            $table->boolean("status");
            $table->string('total')->nullable();
            $table->unsignedBigInteger("created_by");
            $table->timestamps();
            $table->foreign("id_mobil")->references("id")->on("mobil_module")->onDelete("cascade");
            $table->foreign("id_costumer")->references("id")->on("costumers_module")->onDelete("cascade");
            $table->foreign("created_by")->references("id")->on("admin_module")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjam_module');
    }
}
