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
        Schema::create('rekapan_trafo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apj_id');
            $table->string('gardu_induk')->index();
            $table->string('trafo_nama');
            $table->string('merk');
            $table->float('arus_hs_3_ph');
            $table->float('arus_hs_150');
            $table->float('kapasitas');
            $table->integer('vp');
            $table->integer('vs');
            $table->float('trafo_imp');
            $table->float('rl1_fs');
            $table->float('xl1_fs');
            $table->float('rl0_n');
            $table->float('trafo_nominal');
            $table->integer('in');
            $table->integer('primer');
            $table->string('tipe_rele');
            $table->string('keterangan');
            $table->string('user_update');
            $table->timestamp('last_update');
            $table->foreign('gardu_induk')->references('gardu_induk_alias')->on('dc_gardu_induk')->onDelete('cascade');
            $table->foreign('apj_id')->references('apj_id')->on('dc_apj')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekapan_trafo');
    }
};
