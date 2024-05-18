@extends('layouts.layout-tabungan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit Tabungan
                    <a href="{{ route('tabungan.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('tabungan.update', $tabungan->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="id_siswa">Id-Siswa</label>
                                    <input type="number" class="form-control @error('id_siswa') is-invalid @enderror"
                                        name="id_siswa" value="{{ old('id_siswa', $tabungan->id_siswa) }}">
                                    @error('id_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="tabungan">Tabungan</label>
                                    <input type="text" class="form-control @error('tabungan') is-invalid @enderror"
                                        name="tabungan" value="{{ old('tabungan', $tabungan->tabungan) }}">
                                    @error('tabungan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">
                                    <label for="tgl">Tanggal Nabung</label>
                                    <input type="text" class="form-control @error('tgl') is-invalid @enderror"
                                        name="tgl" value="{{ old('tgl', $tabungan->tgl) }}">
                                    @error('tgl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection