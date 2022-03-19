<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('fullname')->nullable();
            $table->string('alamat')->nullable();
            $table->text('province')->nullable();
            $table->string('city')->nullable();
            $table->string('nohp')->nullable();
            $table->string('foto')->nullable();
            $table->text('about')->nullable();
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_mou_mitra')->default(false);
            $table->enum('role', ['admin', 'user', 'mitra']);
            $table->enum('as_mitra', ['Perawat', 'Dokter', 'Non-medis'])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
