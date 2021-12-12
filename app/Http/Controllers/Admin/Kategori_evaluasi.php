<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\ModelsKategoriEvaluasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Keygen\Keygen;

class Kategori_evaluasi extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(ModelsKategoriEvaluasi $kategori_evaluasi)
    {
        $kategori_evaluasi = $kategori_evaluasi->all();
        return view('admin.crud_pertanyaan.crud_kategori_pertanyaan.view', compact('kategori_evaluasi'));
    }

    public function create()
    {
        return view('admin.crud_pertanyaan.crud_kategori_pertanyaan.forms');
    }

    public function store(Request $insert_data)
    {
        $costum = [
            'required' => ':attribute jangan di kosongkan'
        ];
        $insert_data->validate([
            'kategori_evaluasi' => 'required'
        ], $costum);

        ModelsKategoriEvaluasi::create([
            'kategori' => $insert_data->kategori_evaluasi,
            'id' => Keygen::numeric(2)->generate(),
        ]);

        return redirect('/admin/kategori_evaluasi/view')->with('sukses', 'kategori evaluasi berhasil di tambah');
    }

    public function edit(ModelsKategoriEvaluasi $edit)
    {
        return view('admin.crud_pertanyaan.crud_kategori_pertanyaan.edit', compact('edit'));
    }

    public function update(Request $databaru, ModelsKategoriEvaluasi $datalama)
    {
        $costum = [
            'required' => ':attribute jangan di kosongkan'
        ];
        $databaru->validate([
            'kategori_evaluasi' => 'required'
        ], $costum);

        ModelsKategoriEvaluasi::where('id', $datalama->id)
            ->update([
                'kategori' => $databaru->kategori_evaluasi,
            ]);

        return redirect('/admin/kategori_evaluasi/view')->with('sukses', 'data kategori berhasil di ubah');
    }

    public function destroy(ModelsKategoriEvaluasi $delete)
    {
        ModelsKategoriEvaluasi::destroy('id,', $delete->id);
        return redirect('/admin/kategori_evaluasi/view')->with('sukses', 'data berhasil di hapus');
    }
}
