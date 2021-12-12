<?php

namespace App\Http\Controllers\Admin;

// panggil modelsnya
use App\Imports\PertanyaanImports;
use App\Models\Admin\PertanyaanModels;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Keygen\Keygen;
use Maatwebsite\Excel\Facades\Excel;

class Pertanyaan extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // imports pertanyaan
    public function imports(Request $import){

        $costum = [
            'required' => ':attribute jangan di kosongkan',
            'mimes' => 'file yang di upload harus file excel tidak file lain'
        ];
        $import->validate([
            'pertanyaan' => 'required|mimes:xls,xlsx',
        ],$costum);

        Excel::import(new PertanyaanImports(), $import->file('pertanyaan'));
        return redirect('/admin/pertanyaan')->with('sukses','data pertanyaan berhasil di import');
    }

    // method untuk menampilkan semua pertanyaan
    public function index(PertanyaanModels $allData)
    {
        $pertanyaan = $allData->all();
        return view('admin.crud_pertanyaan.pertanyaan', compact('pertanyaan'));
    }
    // method untuk menampilkan form tambah pertanyaan
    public function create()
    {
        $data = array(
            'kategori' => DB::table('kategori_pertanyaan')->get(),
            'jurusan' => DB::table('jurusan')->get(),
        );
        return view('admin.crud_pertanyaan.tambah_pertanyaan', compact('data'));
    }

    // method untuk insert pertanyaan kedalam database
    public function store(Request $insert_data)
    {
        $costum = [
            'required' => ':attribute tidak boleh di kosongkan'
        ];
        $insert_data->validate([
            'pertanyaan' => 'required',
        ], $costum);

        PertanyaanModels::create([
            'pertanyaan' => $insert_data->pertanyaan,
            'kategori_pertanyaan_idkategori_pertanyaan' => $insert_data->evaluasi,
            'jurusan_idjurusan' => $insert_data->jurusan,
            'users_noreg' => $insert_data->users,
            'id' => Keygen::numeric(2)->generate(),
        ]);

        return redirect('/admin/pertanyaan')->with('sukses', 'data pertanyaan berhasil di tambahkan');
    }

    // method untuk menampilkan form edit pertanyaan
    public function edit(PertanyaanModels $edit_data)
    {
        $data = array(
            'kategori_evaluasi' => DB::table('kategori_pertanyaan')->get(),
            'jurusan' => DB::table('jurusan')->get(),
        );
        return view('admin.crud_pertanyaan.edit', compact('edit_data','data'));
    }

    // method untuk menampilkan update pertanyaan
    public function update(Request $databaru, PertanyaanModels $datalama)
    {
        $costum = [
            'required' => ':attribute tidak boleh di kosongkan'
        ];
        $databaru->validate([
            'pertanyaan' => 'required',
        ], $costum);

        PertanyaanModels::where('id',$datalama->id)
            ->update([
                'pertanyaan' => $databaru->pertanyaan,
                'kategori_pertanyaan_idkategori_pertanyaan' => $databaru->evaluasi,
                'jurusan_idjurusan' => $databaru->jurusan,
                'users_noreg' => $databaru->users,
            ]);
        return redirect('/admin/pertanyaan')->with('sukses', 'data pertanyaan berhasil di ubah');
    }

    // method untuk delete pertanyaan
    public function delete(PertanyaanModels $hapusData)
    {
        PertanyaanModels::destroy('id',$hapusData->id);
        return redirect('/admin/pertanyaan')->with('sukses', 'data pertanyaan berhasil di hapus');
    }
}
