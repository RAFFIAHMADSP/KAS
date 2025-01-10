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
        Schema::create('kas', function (Blueprint $table) {
            $table->integer('id_kas')->primary()->autoIncrement();
            $table->integer('id_user');

            $table->foreign('id_user')->references('id_user')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->date('tanggal');
            $table->enum('jenis', ['masuk', 'keluar']);
            $table->decimal('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kas');
    }
};
