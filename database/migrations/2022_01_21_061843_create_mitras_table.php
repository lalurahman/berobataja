<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('mitra_id');
            $table->string('fullname')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('nohp')->nullable();
            $table->string('foto')->nullable();
            $table->text('about')->nullable();
            $table->enum('jenis', ['Perawat', 'Dokter', 'Non-medis'])->nullable();
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable();
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
        Schema::dropIfExists('mitras');
    }
}
