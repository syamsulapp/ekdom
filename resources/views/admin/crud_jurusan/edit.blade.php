@extends('layouts.ekdom.app')

@section('judul','Edit Data Jurusan')

@section('konten')

    <div class="row">
        <div id="tooltips" class="col-lg-12 layout-spacing col-md-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Edit jurusan</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action="{{ url('/admin/jurusan') }}{{ ('/') }}{{ $edit->id }}{{ ('/') }}{{ ('update') }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="col-md-6 mb-5">
                                <label for="validationTooltip03">Edit Jurusan</label>
                                <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" placeholder="Jurusan" value="{{ $edit->jurusan }}">
                                @error('jurusan')
                                <div class="invalid-tooltip">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
