@extends('layouts.ekdom.app')


@section('judul','edit users')


@section('konten')
<div class="row">
    <div id="tooltips" class="col-lg-12 layout-spacing col-md-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Users Management</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="{{ url('admin/users') }}{{ ('/') }}{{ $edit_data->id }}{{ ('/') }}{{ ('update') }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-row">
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="nama" value="{{ $edit_data->name }}">
                            @error('nama')
                            <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="username" value="{{ $edit_data->username }}">
                            @error('username')
                            <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Jurusan</label>
                            <div id="select_menu" class="form-group mb-4">
                                <select class="custom-select" name="jurusan" required>
                                    <option value="">Pilih Jurusan :</option>
                                    @foreach($data['jurusan'] as $j)
                                    @if($edit_data->jurusan_idjurusan == $j->idjurusan)
                                    <option value="{{ $j->idjurusan }}" selected>{{ $j->jurusan }}</option>
                                    @else
                                    <option value="{{ $j->idjurusan }}">{{ $j->jurusan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Pilih jurusan
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Role</label>
                            <div id="select_menu" class="form-group mb-4">
                                <select class="custom-select" name="role" required>
                                    <option value="">Pilih Role:</option>
                                    @foreach($data['role'] as $r)
                                    @if($edit_data->Role_idRole == $r->idRole)
                                    <option value="{{ $r->idRole }}" selected>{{ $r->role }}</option>
                                    @else
                                    <option value="{{ $r->idRole }}">{{ $r->role }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Pilih role
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Jadwal Evaluasi</label>
                            <div id="select_menu" class="form-group mb-4">
                                <select class="custom-select" name="jadwal" required>
                                    <option value="">Pilih Jadwal Evaluasi:</option>
                                    @foreach($data['jadwal'] as $j)
                                    @if($edit_data->jadwal_evaluasi_idjadwal_evaluasi == $j->idjadwal_evaluasi)
                                    <option value="{{ $j->idjadwal_evaluasi }}" selected>{{ $j->tanggal }}</option>
                                    @else
                                    <option value="{{ $j->idjadwal_evaluasi }}">{{ $j->tanggal }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Pilih jadwal
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Password</label>
                            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" value="{{ old('password') }}">
                            @error('password')
                            <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            </div>
            <button class="btn btn-primary mt-2" type="submit">Submit form</button>
            </form>
        </div>
    </div>
</div>
</div>

@endsection