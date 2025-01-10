<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemasukans', function (Blueprint $table) {
            $table->integer('id_pemasukan')->primary()->autoIncrement();

            $table->integer('id_siswa');
            $table->foreign('id_siswa')
                ->references('id_siswa')
                ->on('siswas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->date('tanggal');
            $table->string('jumlah');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukans');
    }
};
