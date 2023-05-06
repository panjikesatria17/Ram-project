<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatanasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('datanasabahs')->insert([
            'user' => '1002',
            'customer_name' => 'Kartika Sari Purnama',
            'tempat_lahir' => 'Padang Sidempuan',
            'tgl_lahir' => '1987-02-03',
            'jenis_kelamin' => 'perempuan',
            'no_loan' => '4580152045879960',
            'limit' => '200000',
            'esaving_asset' => 'null',
            'recovery_rate' => 'null',
            'balance' => '458700',
            'min_paid' => '278005',
            'bank' => 'BNI 46',
            'type' => 'L P',
            'area' => 'Jakarta',
            'open_date' => '2014-08-05',
            'wo_date' => '2016-11-30',
            'last_payment_date' => '2015-12-01',
            'last_amount_paid' => '16000',
            'last_contak' => '2020-12-01',
            'email_customer' => 'tika@example.com',
            'alamat_rumah1' => 'Perum Green Mutiara ',
            'alamat_rumah2' => 'Jalan Jakarta Kota Raya',
            'alamat_rumah3' => 'RT 12 RW 09 BLOK B2 NO 25',
            'kelurahan' => 'Ceger',
            'kecamatan' => 'Siantar',
            'kota' => 'Palangkaraya',
            'kode_pos' => '125270',
            'telp_rumah1' => 'O21 77884455',
            'telp_rumah2' => 'O21 66553322',
            'mobile_phone1' => 'O87877108888',
            'mobile_phone2' => 'O89765432215',
            'nama_perusahaan' => 'PT Adidaya Enerdy Indonesia',
            'alamat_kantor1' => 'SCBX TOWER 2 Lantai 509',
            'alamat_kantor2' => 'Jalan Rasuna Said Kav 34 A',
            'alamat_kantor3' => 'Kuningan Timur - Jakarta',
            'kelurahan_off' => 'Setia Budi',
            'kecamatan_off' => 'Jakarta Selatan',
            'kota_off' => 'Jakarta',
            'kode_posoff' => '125270',
            'jabatan' => 'Manager Purchasing',
            'office_phone1' => '275587896',
            'office_phone2' => '275587897',
            'nama_ibukandung' => 'Desi Ratnasuri Marpaung',
            'emergency_kontak' => 'Cecep Surasep Wardoyo',
            'relation' => 'Kakak Kandung',
            'econ_phone1' => 'O8976644234',
            'econ_phone2' => 'O8976644234',
            'total_action' => 'null',
            'last_action' => 'null',
            'finance_analys' => 'null',
            'paid_rasio' => 'null',
            'total_payment' => 'null',
            'last_payactive' => 'null',
            'last_dateactive' => 'null',
            'type_program' => 'null',
            'expired_status' => 'null',
            'update_payment' => 'null',
            'coll1' => 'null',
            'coll2' => 'null',
            'coll3' => 'null',
            'coll4' => 'null',
            'coll5' => 'null',

        ]);
    }
}
