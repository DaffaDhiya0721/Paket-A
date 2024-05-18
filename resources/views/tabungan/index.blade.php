@extends('layouts.layout-tabungan')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-mb-8">
                <div class="card">
                    <div class="card-header">Data Tabungan
                        <a href="{{route('tabungan.create')}}" class="btn btn-sm btn-outline-primary" style="float: right">Tambah</a>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-boarded" id="datatable">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id - Siswa</th>
                                    <th>Tabungan</th>
                                    <th>Tanggal Nabung</th>
                                </tr>
                                </thead>
                                <body>
                                    @php $no = 1; @endphp
                                @foreach ($tabungan as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->id_siswa}}</td>
                                    <td>{{$item->tabungan}}</td>
                                    <td>{{$item->tgl}}</td>
                                    <td>
                                        <form action="{{route('tabungan.destroy',$item->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('tabungan.edit', $item->id)}}" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{route('tabungan.show', $item->id)}}" class="btn btn-sm btn-warning">Show</a>
                                        <button class="btn btn-sm btn-danger" type="submit"
                                            onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">Delete
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </body>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection