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
        Schema::create('datanasabahs', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('customer_name');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('no_loan');
            $table->string('limit');
            $table->string('esaving_asset');
            $table->string('recovery_rate');
            $table->string('balance');
            $table->string('min_paid');
            $table->string('bank');
            $table->string('type');
            $table->string('area');
            $table->date('open_date');
            $table->date('wo_date');
            $table->date('last_payment_date');
            $table->string('last_amount_paid');
            $table->date('last_contak');
            $table->string('email_customer');
            $table->string('alamat_rumah1');
            $table->string('alamat_rumah2');
            $table->string('alamat_rumah3');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('kode_pos');
            $table->string('telp_rumah1');
            $table->string('telp_rumah2');
            $table->string('mobile_phone1');
            $table->string('mobile_phone2');
            $table->string('nama_perusahaan');
            $table->string('alamat_kantor1');
            $table->string('alamat_kantor2');
            $table->string('alamat_kantor3');
            $table->string('kelurahan_off');
            $table->string('kecamatan_off');
            $table->string('kota_off');
            $table->string('kode_posoff');
            $table->string('jabatan');
            $table->string('office_phone1');
            $table->string('office_phone2');
            $table->string('nama_ibukandung');
            $table->string('emergency_kontak');
            $table->string('relation');
            $table->string('econ_phone1');
            $table->string('econ_phone2');
            $table->string('total_action');
            $table->string('last_action');
            $table->string('finance_analys');
            $table->string('paid_rasio');
            $table->string('total_payment');
            $table->string('last_payactive');
            $table->string('last_dateactive');
            $table->string('type_program');
            $table->string('expired_status');
            $table->string('update_payment');
            $table->string('coll1');
            $table->string('coll2');
            $table->string('coll3');
            $table->string('coll4');
            $table->string('coll5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datanasabahs');
    }
};
