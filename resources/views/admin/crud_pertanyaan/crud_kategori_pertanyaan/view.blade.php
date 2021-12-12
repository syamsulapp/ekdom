@extends('layouts.ekdom.app')


@section('judul','kategori pertanyaan')


@section('konten')

<div class="admin-data-content layout-top-spacing">

    <div class="row layout-top-spacing" id="cancel-row">

        @if (session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
        @endif

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>kategori</th>
                            <th>Delete</th>
                            <th class="no-content">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori_evaluasi as $kategori)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kategori->kategori }}</td>
                            <form action="{{ url('/admin/kategori_evaluasi') }}{{ ('/') }}{{ $kategori->id }}{{ ('/') }}{{ ('delete') }}" method="POST">
                                @csrf
                                @method('delete')
                                <td><button class="btn btn-danger mb-2">Hapus Data</button></td>
                            </form>
                            <td><a href="{{ url('/admin/kategori_evaluasi') }}{{ ('/') }}{{ $kategori->id }}{{ ('/') }}{{ ('edit') }}" class="btn btn-primary mb-2">Update Data</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>kategori</th>
                            <th>Delete</th>
                            <th class="no-content">Update</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
    @endsection