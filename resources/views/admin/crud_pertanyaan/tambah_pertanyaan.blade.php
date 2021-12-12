@extends('layouts.ekdom.app')

@section('judul','Tambah Pertanyaan')

@section('konten')
<div class="row">
    <div id="tooltips" class="col-lg-12 layout-spacing col-md-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Pertanyaan</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="{{ route('addPertanyaan') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Pertanyaan</label>
                            <input type="text" name="pertanyaan" class="form-control @error('pertanyaan') is-invalid @enderror" placeholder="Pertanyaan" value="{{ old('pertanyaan') }}">
                            @error('pertanyaan')
                            <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Noreg</label>
                            <input type="text" name="users" class="form-control @error('noreg') is-invalid @enderror" placeholder="Pertanyaan" value="{{ Auth::user()->noreg }}" readonly>
                            @error('noreg')
                            <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Kategori evaluasi</label>
                            <div id="select_menu" class="form-group mb-4">
                                <select class="custom-select" name="evaluasi" required>
                                    <option value="">Evaluasi</option>
                                    @foreach($data['kategori'] as $kategori)
                                    @if(Auth::user()->Role_idRole == 2)
                                    @if($kategori->idkategori_pertanyaan == 1)
                                    <option value="{{ $kategori->idkategori_pertanyaan}}">{{ $kategori->kategori }}</option>
                                    @endif
                                    @elseif (Auth::user()->Role_idRole == 3)
                                    @if($kategori->idkategori_pertanyaan != 1)
                                    <option value="{{ $kategori->idkategori_pertanyaan}}">{{ $kategori->kategori }}</option>
                                    @endif
                                    @endif
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Pilih Kategori Pertanyaan
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="validationTooltip03">Jurusan</label>
                            <div id="select_menu" class="form-group mb-4">
                                <select class="custom-select" name="jurusan" required>
                                    <option value="">Jurusan</option>
                                    @foreach($data['jurusan'] as $jurusan)
                                    <option value="{{ $jurusan->idjurusan }}">{{ $jurusan->jurusan }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Pilih Kategori Pertanyaan
                                </div>
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