<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCiriFisikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_ciri_fisik', function (Blueprint $table) {
            $table->id();
            $table->integer('id_grade');
            $table->integer('id_ciri_fisik');
            $table->string('kode_detail_fisik',5);
            $table->string('nama_detail_fisik',191);
            $table->decimal('md');
            $table->decimal('mb');
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
        Schema::dropIfExists('detail_ciri_fisik');
    }
}
