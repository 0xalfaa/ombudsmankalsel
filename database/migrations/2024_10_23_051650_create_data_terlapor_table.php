<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('data_terlapor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelapor_id'); // Foreign key ke tabel data_pelapor
            $table->string('nama_terlapor', 255);
            $table->string('jabatan_terlapor', 100)->nullable();
            $table->string('kelompok_instansi_terlapor', 100);
            $table->string('klasifikasi_instansi_terlapor', 100);
            $table->string('instansi_terlapor', 255);
            $table->text('alamat_lengkap')->nullable();
            $table->string('provinsi', 100);
            $table->string('kota_kabupaten', 100);
            $table->string('kecamatan', 100);
            $table->timestamps();
    
            // Define foreign key constraint
            $table->foreign('pelapor_id')->references('id')->on('data_pelapor')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('data_terlapor');
    }
    
};
