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
        Schema::create('data_pelapor', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 255);
            $table->boolean('rahasia_data_pelapor')->default(false);
            $table->string('warga_negara', 100);
            $table->string('jenis_identitas', 50);
            $table->string('nomor_identitas', 100)->nullable();
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin', 10); // 'Wanita' atau 'Pria'
            $table->string('status_perkawinan', 20); // 'Kawin', 'Belum Kawin', 'Cerai Mati', 'Cerai Hidup'
            $table->string('pekerjaan', 100)->nullable();
            $table->string('pendidikan_terakhir', 100)->nullable();
            $table->text('alamat_lengkap')->nullable();
            $table->string('provinsi', 100);
            $table->string('kota_kabupaten', 100);
            $table->string('kecamatan', 100);
            $table->string('nomor_telepon', 20)->nullable();
            $table->string('email', 255)->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('data_pelapor');
    }
    
};
