@extends('layouts.master')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/karyawan/create">Add Karyawan</a>
    <form action="{{route('logout')}}" method="POST" class="d-flex" role="search">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Logout</button>
    </form>
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach($karyawan as $k)
        <tr>
            <td>{{$k->id}}</td>
            <td>{{$k->nama}}</td>
            <td>{{$k->nik}}</td>
            <td>{{$k->jenis_kelamin}}</td>
            <td>{{$k->jabatan}}</td>
            <td>{{$k->alamat}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/karyawan/{{$k->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/karyawan/{{$k->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete"
                            onclick="confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection