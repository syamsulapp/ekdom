@extends('layouts.ekdom.app')


@section('judul','edit kategori evaluasi')


@section('konten')
<div class="row">
    <div id="tooltips" class="col-lg-12 layout-spacing col-md-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Kategori Evaluasi</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="{{ url('/admin/kategori_evaluasi') }}{{ ('/') }}{{ $edit->id }}{{ ('/') }}{{ ('update') }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-row">
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Kategori Evaluasi</label>
                            <input type="text" name="kategori_evaluasi" class="form-control @error('kategori_evaluasi') is-invalid @enderror" placeholder="Kategori Evaluasi" value="{{ $edit->kategori }}">
                            @error('kategori_evaluasi')
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