<?php

namespace App\Imports;

use App\Models\Admin\crud_users\ModelsUsers;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Keygen\Keygen;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ModelsUsers([
            'noreg' => Keygen::numeric(12)->generate(),
            'name' => $row[1],
            'username' => $row[2],
            'password' => Hash::make($row[3]),
            'Role_idRole' => $row[4],
            'jurusan_idjurusan' => $row[5],
            'jadwal_evaluasi_idjadwal_evaluasi' => $row[6],
        ]);
    }
}
