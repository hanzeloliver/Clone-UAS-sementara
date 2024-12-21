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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->unique();
            $table->integer('umur');
            $table->date('tanggal_lahir');
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->string('no_hp');
            $table->year('tahun_lulus_smp');
            $table->string('nama_orangtua');
            $table->string('no_hp_orangtua');
            $table->string('daerah_asal');
            $table->string('jenjang_pendidikan_terakhir');
            $table->year('tahun_masuk');
            $table->string('asal_sekolah');
            $table->string('negara_asal_sekolah');
            $table->string('kota_asal_sekolah');
            $table->binary('ijazah_smp');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};


