@extends('employees.layout')
@section('content')
    <div class="card" style="margin:20px">
        <div class="card-header">Add New Employee</div>
        <div class="card-body">
            <form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control">
                <label for="gender">Jenis Kelamin</label>
                <input type="text" name="gender" id="gender" class="form-control">
                <label for="photo">Foto</label>
                <input type="file" name="photo" id="photo" class="form-control">

                <input type="submit" value="save" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
