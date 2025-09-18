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
        Schema::create('armada', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary()->auto;
            $table->string('plat_nomor', length: 20)->unique();
            $table->enum('jenis', ['motor','mobil_box','pickup','truck','van','lainnya']);
            $table->enum('tersedia', ['tersedia','tidak_tersedia']);
            $table->decimal('kapasitas', total: 10, places: 2);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
