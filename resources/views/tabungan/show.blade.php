@extends('layouts.layout-tabungan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Tabungan
                    <a href="{{ route('tabungan.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Id-Siswa</label>
                        <b>{{$tabungan->id_siswa}}</b>
                    </div>
                    <div class="mb-2">
                        <label for="">Tabungan</label>
                        <b>{{$tabungan->tabungan}}</b>
                    </div>
                    <div class="mb-2">
                        <label for="">Tanggal Nabung</label>
                        <b>{{$tabungan->tgl}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection