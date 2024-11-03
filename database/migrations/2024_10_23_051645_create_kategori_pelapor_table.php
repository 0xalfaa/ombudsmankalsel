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
        Schema::create('kategori_pelapor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelapor_id'); // Foreign key ke tabel data_pelapor
            $table->string('status_lapor', 10);
            $table->string('kategori_pelapor', 50);
            $table->string('jenis_pelapor', 100);
            $table->string('file_identitas')->nullable();
            $table->string('bukti_dokumen')->nullable();
            $table->string('uraian_peristiwa')->nullable();
            $table->date('tanggal_upaya_terakhir')->nullable();
            $table->string('bukti_upaya', 10);
            $table->string('perihal', 255);
            $table->string('harapan_pelapor', 255);
            $table->timestamps();
    
            // Define foreign key constraint
            $table->foreign('pelapor_id')->references('id')->on('data_pelapor')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kategori_pelapor');
    }
    
};
