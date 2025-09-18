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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary()->autoIncrement();
            $table->char('nomor_resi', 50)->unique();
            $table->string('nama_barang', 30);
            $table->text('deskripsi')->nullable();

            $table->string('nama_pengirim', 30);
            $table->string('nomor_pengirim', 30);

            $table->string('nama_penerima', 30);
            $table->string('nomor_penerima', 30);

            $table->double('koordinat_x');
            $table->double('koordinat_y');

            $table->enum('status', ['pending', 'transit', 'delivered', 'cancelled'])
                ->default('pending');

            $table->unsignedBigInteger('biaya')->default(0);

            $table->timestamps('created_at');
            $table->timestamps('updated_at');

            $table->unsignedBigInteger('armada_id');

            $table->foreign('armada_id')->references('id')->on('armada');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
