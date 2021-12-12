<?php

namespace App\Imports;

use App\Models\Admin\crud_jurusan\ModelsJurusan;
use Maatwebsite\Excel\Concerns\ToModel;
use Keygen\Keygen;
class JurusanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ModelsJurusan([
            'jurusan' => $row[1],
            'id' => Keygen::numeric(2)->generate(),
        ]);
    }
}
