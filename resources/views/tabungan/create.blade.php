@extends('layouts.layout-tabungan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-mb-8">
            <div class="card">
                <div class="card-header">Data Tabungan
                    <a href="{{route('tabungan.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('tabungan.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="id_siswa">Id-Siswa</label>
                                    <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror">
                                        <option value="">Pilih Siswa</option>
                                        @foreach ($siswa as $data)
                                        <option value="{{$data->id}}">{{$data->id}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_siswa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="tabungan">Tabungan</label>
                                    <input type="number" class="form-control @error('tabungan') is-invalid @enderror"
                                        name="tabungan">
                                    @error('tabungan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="tgl">Tanggal Terbit</label>
                                <input type="date" class="form-control @error('tgl') is-invalid @enderror"
                                    name="tgl">
                                @error('tgl')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection