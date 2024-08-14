@extends('employees.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" style="padding: 20px">
                <div class="card" >
                    <div class="card-header">Data Karyawan</div>
                    <div class="card-body">
                        <a href="{{route('employee.create')}}" class="btn btn-success btn-sm">Tambah Data Karyawan</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $item )
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->gender}}</td>
                                        <td><img src="{{asset($item->photo)}}" alt="photo" width="50" height="50" class="img img-responsive"></td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
