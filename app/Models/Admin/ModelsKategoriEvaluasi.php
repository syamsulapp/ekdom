<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ModelsKategoriEvaluasi extends Model
{
    protected $table = 'kategori_pertanyaan';
    protected $fillable = ['kategori', 'updated_at', 'created_at', 'id'];
}
