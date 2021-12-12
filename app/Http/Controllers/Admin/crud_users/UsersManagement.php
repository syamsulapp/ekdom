<?php

namespace App\Http\Controllers\Admin\crud_users;

use App\Http\Controllers\Controller;
use App\Models\Admin\crud_users\ModelsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Keygen\Keygen;

// instance class import 
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UsersManagement extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(ModelsUsers $alldata)
    {
        $users = $alldata->all();
        return view('admin.crud_users_management.view', compact('users'));
    }

    public function import_users(Request $importData)
    {
        $costum = [
            'required' => ':attribute jangan di kosongkan',
            'mimes' => 'yang di upload harus file excel tidak file lain',
        ];

        $importData->validate([
            'importUsers' => 'required|mimes:xls,xlsx',
        ], $costum);

        Excel::import(new UsersImport(), $importData->file('importUsers'));

        return redirect('/admin/users_view')->with('sukses', 'akun users berhasil di import');
    }

    public function create()
    {
        $data = array(
            'jurusan' => DB::table('jurusan')->get(),
            'jadwal' => DB::table('jadwal_evaluasi')->get(),
            'role' => DB::table('Role')->get(),
        );
        return view('admin.crud_users_management.tambah', compact('data'));
    }

    public function store(Request $insert_data)
    {
        $costum = [
            'required' => ':attribute jangan di kosongkan',
        ];
        $insert_data->validate([
            'nama' => 'required',
            'username' => 'required',
        ], $costum);

        ModelsUsers::create([
            'noreg' => Keygen::numeric(12)->generate(),
            'name' => $insert_data->nama,
            'username' => $insert_data->username,
            'jurusan_idjurusan' => $insert_data->jurusan,
            'Role_idRole' => $insert_data->role,
            'jadwal_evaluasi_idjadwal_evaluasi' => $insert_data->jadwal,
            'password' => Hash::make($insert_data->password),
        ]);

        return redirect('/admin/users_view')->with('sukses', 'akun users berhasil di tambah');
    }

    public function edit(ModelsUsers $edit_data)
    {
        $data = array(
            'jurusan' => DB::table('jurusan')->get(),
            'jadwal' => DB::table('jadwal_evaluasi')->get(),
            'role' => DB::table('Role')->get(),
        );
        return view('admin.crud_users_management.edit', compact('edit_data', 'data'));
    }

    public function update(Request $databaru, ModelsUsers $datalama)
    {
        $costum = [
            'required' => ':attribute jangan di kosongkan',
        ];
        $databaru->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
        ], $costum);

        ModelsUsers::where('id', $datalama->id)
            ->update([
                'name' => $databaru->nama,
                'username' => $databaru->username,
                'jurusan_idjurusan' => $databaru->jurusan,
                'Role_idRole' => $databaru->role,
                'jadwal_evaluasi_idjadwal_evaluasi' => $databaru->jadwal,
                'password' => Hash::make($databaru->password),
            ]);

        return redirect('/admin/users_view')->with('sukses', 'data berhasil di ubah');
    }

    public function destroy(ModelsUsers $hapus_data)
    {
        ModelsUsers::destroy('id', $hapus_data->id);
        return redirect('/admin/users_view')->with('sukses', 'data berhasil di hapus');
    }
}
