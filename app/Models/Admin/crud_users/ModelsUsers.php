<?php

namespace App\Models\Admin\crud_users;

use Illuminate\Database\Eloquent\Model;

class ModelsUsers extends Model
{
    protected $table = 'users';
    protected $fillable = ['noreg', 'name', 'username', 'password', 'created_at', 'updated_at', 'Role_idRole', 'jurusan_idjurusan', 'jadwal_evaluasi_idjadwal_evaluasi'];
}
