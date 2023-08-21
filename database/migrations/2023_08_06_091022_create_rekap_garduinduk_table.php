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
        Schema::create('rekap_garduinduk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apj_id');
            $table->string('gardu_induk');
            $table->string('pmt_recloser');
            $table->dateTime('waktu_trip');
            $table->dateTime('waktu_normal');
            $table->string('alasan_operasi');
            $table->string('indikasi_relay');
            /////// scada mobile////////
            $table->string('jenis_gangguan');
            $table->string('fasa');
            $table->string('ifa');
            $table->string('ifb');
            $table->string('ifc');
            $table->string('ifn');
            /////// scada mobile end/////
            $table->string('beban_sebelum');
            $table->string('tegangan_sebelum');
            $table->string('beban_sesudah');
            $table->string('tegangan_sesudah');
            $table->string('kode_gangguan_keterangan');
            $table->float('daya_hilang');
            $table->integer('lama_padam');
            $table->float('kwh_hilang');
            $table->string('cuaca');
            $table->string('no_pole_tiang');
            $table->string('jarak_gangguan');
            $table->string('lokasi_gangguan');
            ///////// scada mobile////////
            $table->string('recovery');
            $table->string('status');
            //////// scada mobile end/////
            $table->string('user_update');
            $table->string('keterangan');
            $table->timestamp('last_update');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_garduinduk');
    }
};
