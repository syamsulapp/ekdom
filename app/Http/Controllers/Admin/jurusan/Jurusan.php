<?php namespace App\Http\Controllers\Admin\jurusan;

use App\Http\Controllers\Controller;
use App\Imports\JurusanImport;
use App\Models\Admin\crud_jurusan\ModelsJurusan;
use Illuminate\Http\Request;
use Keygen\Keygen;
use Maatwebsite\Excel\Facades\Excel;

class Jurusan extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function import_jurusan(Request $import_data_jurusan){

        $costum_error = [
            'required' => ':attribute jangan di kosongkan',
            'mimes' =>  'file yang di upload harus file excel tidak file lain'
        ];
        $import_data_jurusan->validate([
            'jurusan' => 'required|mimes:xls,xlsx',
        ],$costum_error);

        Excel::import(new JurusanImport(), $import_data_jurusan->file('jurusan'));

        return redirect('/admin/jurusan/view')->with('sukses','data jurusan berhasil di import');
    }

    public function index(ModelsJurusan $jurusan){
        $jurusan = $jurusan->all();
        return view('admin.crud_jurusan.view',compact('jurusan'));
    }

    public function create(){
        return view('admin.crud_jurusan.tambah');
    }

    public function store(Request $insert_data){

        $costum = [
            'required' => ':attribute jangan di kosongkan'
        ];
        $insert_data->validate([
            'jurusan' => 'required'
        ],$costum);

        ModelsJurusan::create([
            'jurusan' => $insert_data->jurusan,
            'id' => Keygen::numeric(2)->generate(),
        ]);

        return redirect('/admin/jurusan/view')->with('sukses','data jurusan berhasil di tambahkan');
    }

    public function edit(ModelsJurusan $edit){
        return view('admin.crud_jurusan.edit',compact('edit'));
    }

    public function update(Request $databaru , ModelsJurusan $datalama){
        $costum = [
            'required' => ':attribute jangan di kosongkan'
        ];
        $databaru->validate([
            'jurusan' => 'required'
        ],$costum);

        ModelsJurusan::where('id',$datalama->id)
            ->update([
                'jurusan' => $databaru->jurusan,
            ]);

        return redirect('/admin/jurusan/view')->with('sukses','data jurusan berhasil di ubah');
    }

    public function destroy(ModelsJurusan $hapus_data){
        ModelsJurusan::destroy('id',$hapus_data->id);
        return redirect('/admin/jurusan/view')->with('sukses','data jurusan berhasil di hapus');
    }
}
