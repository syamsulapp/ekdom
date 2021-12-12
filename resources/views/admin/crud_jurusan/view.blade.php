@extends('layouts.ekdom.app')

@section('judul','Jurusan')

@section('konten')
    <div class="admin-data-content layout-top-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            @if (session('sukses'))
                <div class="alert alert-success">
                    {{ session('sukses') }}
                </div>
            @endif

            <a class="btn btn-warning mb-2 mr-2 btn-rounded" data-toggle="modal" data-target="#importData">Import Jurusan <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                    <polyline points="7 10 12 15 17 10"></polyline>
                    <line x1="12" y1="15" x2="12" y2="3"></line>
                </svg></a>

            <!-- Modal -->
            <div class="modal fade" id="importData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Data Jurusan</h5>
                        </div>
                        <form action="{{ route('import_data_jurusan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="jurusan" class="form form-control">
                        <!-- @error('importUsers')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- menampilkan pesan error validasi dari import data jika jenis file yang di import salah(tidak sesuai dengan validasi yang sdh di tentukan) -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config" class="table dt-table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>jurusan</th>
                            <th>Delete</th>
                            <th class="no-content">Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jurusan as $j)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $j->jurusan }}</td>
                                    <td><a href="{{ url('/admin/jurusan') }}{{ ('/') }}{{ $j->id }}{{ ('/') }}{{ ('edit') }}" class="btn btn-primary mb-2">Update Data</a></td>
                                    <form action="{{ url('/admin/jurusan') }}{{ ('/') }}{{ $j->id }}{{ ('/') }}{{ ('hapus') }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <td><button type="submit" class="btn btn-danger mb-2">Delete Data</button></td>
                                    </form>
                                </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>jurusan</th>
                            <th>Delete</th>
                            <th class="no-content">Update</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>

@endsection
