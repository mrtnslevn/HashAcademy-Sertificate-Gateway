<?php

namespace App\Imports;

use App\Models\sertifikat;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SertifikatImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new sertifikat([
            'Nama_Peserta'=> $row['Nama_Peserta'],
            'Nama_Kegiatan'=> $row['Nama_Kegiatan'],
            'kode_unik'=> $row['kode_unik'],
            'sertifikat_path'=> $row['sertifikat_path'],
        ]);
    }
}
