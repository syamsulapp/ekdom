<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PertanyaanModels extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['pertanyaan', 'kategori_pertanyaan_idkategori_pertanyaan', 'jurusan_idjurusan', 'users_noreg','id'];
    use HasFactory;
}
