@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-mb-8">
                <div class="card">
                    <div class="card-header">Data Siswa
                        <a href="{{route('siswa.create')}}" class="btn btn-sm btn-outline-primary" style="float: right">Tambah</a>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-boarded" id="datatable">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>Foto</th>
                                </tr>
                                </thead>
                                <body>
                                    @php $no = 1; @endphp
                                @foreach ($siswa as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->nis}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->kelas}}</td>
                                    <td>{{$item->jk}}</td>
                                    <td>{{$item->agama}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td align="center"><img src="{{asset('/images/siswa/'.$item->foto)}}"
                                        style="width: 200px;" alt="">
                                </td>
                                    <td>
                                        <form action="{{route('siswa.destroy',$item->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('siswa.edit', $item->id)}}" class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{route('siswa.show', $item->id)}}" class="btn btn-sm btn-warning">Show</a>
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