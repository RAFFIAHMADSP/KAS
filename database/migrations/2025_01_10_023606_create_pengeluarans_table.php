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
        Schema::create('pengeluarans', function (Blueprint $table) {
            $table->integer('id_pengeluaran')->primary()->autoIncrement();
            
            $table->integer('id_user');
            $table->foreign('id_user')
                ->references('id_user')
                ->on('users')
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
        Schema::dropIfExists('pengeluarans');
    }
};
