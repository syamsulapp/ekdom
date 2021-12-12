<?php

namespace App\Imports;

use App\Models\Admin\PertanyaanModels;
use Illuminate\Support\Facades\Auth;
use Keygen\Keygen;
use Maatwebsite\Excel\Concerns\ToModel;

class PertanyaanImports implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PertanyaanModels([
            'pertanyaan' => $row[1],
            'kategori_pertanyaan_idkategori_pertanyaan' => $row[2],
            'jurusan_idjurusan' => $row[3],
            'users_noreg' => Auth::user()->noreg,
            'id' => Keygen::numeric(2)->generate(),
        ]);
    }
}
