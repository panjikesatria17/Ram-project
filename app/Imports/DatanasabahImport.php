<?php

namespace App\Imports;

use App\Models\Datanasabah;
use Maatwebsite\Excel\Concerns\ToModel;


class DatanasabahImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Datanasabah([
            'user' => $row[1],
            'customer_name' => $row[2],
            'tempat_lahir' => $row[3],
            'tgl_lahir' => $row[4],
            'jenis_kelamin' => $row[5],
            'no_loan' => $row[6],
            'limit' => $row[7],
            'esaving_asset' => $row[8],
            'recovery_rate' => $row[9],
            'balance' => $row[10],
            'min_paid' => $row[11],
            'bank' => $row[12],
            'type' => $row[13],
            'area' => $row[14],
            'open_date' => $row[15],
            'wo_date' => $row[16],
            'last_payment_date' => $row[17],
            'last_amount_paid' => $row[18],
            'last_contak' => $row[19],
            'email_customer' => $row[20],
            'alamat_rumah1' => $row[21],
            'alamat_rumah2' => $row[22],
            'alamat_rumah3' => $row[23],
            'kelurahan' => $row[24],
            'kecamatan' => $row[25],
            'kota' => $row[26],
            'kode_pos' => $row[27],
            'telp_rumah1' => $row[28],
            'telp_rumah2' => $row[29],
            'mobile_phone1' => $row[30],
            'mobile_phone2' => $row[31],
            'nama_perusahaan' => $row[32],
            'alamat_kantor1' => $row[33],
            'alamat_kantor2' => $row[34],
            'alamat_kantor3' => $row[35],
            'kelurahan_off' => $row[36],
            'kecamatan_off' => $row[37],
            'kota_off' => $row[38],
            'kode_posoff' => $row[39],
            'jabatan' => $row[40],
            'office_phone1' => $row[41],
            'office_phone2' => $row[42],
            'nama_ibukandung' => $row[43],
            'emergency_kontak' => $row[44],
            'relation' => $row[45],
            'econ_phone1' => $row[46],
            'econ_phone2' => $row[47],
            'total_action' => $row[48],
            'last_action' => $row[49],
            'finance_analys' => $row[50],
            'paid_rasio' => $row[51],
            'total_payment' => $row[52],
            'last_payactive' => $row[53],
            'last_dateactive' => $row[54],
            'type_program' => $row[55],
            'expired_status' => $row[56],
            'update_payment' => $row[57],
            'coll1' => $row[58],
            'coll2' => $row[59],
            'coll3' => $row[60],
            'coll4' => $row[61],
            'coll5' => $row[62],
        ]);
    }
}
