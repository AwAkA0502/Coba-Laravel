<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->id(); // Primary Key, auto-increment
            $table->string('nama_design'); // Nama design, tipe string
            $table->text('deskripsi'); // Deskripsi design, tipe text
            $table->decimal('harga', 10, 2); // Harga design, tipe decimal dengan 10 digit total dan 2 digit desimal
            $table->string('code_design'); // Code design, tipe string
            $table->string('pembuat_design'); // Nama pembuat design, tipe string
            $table->timestamps(); // Created at & Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designs'); // Menghapus tabel jika di-rollback
    }
}
