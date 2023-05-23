@extends('layouts.master')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/karyawan/create">Add Karyawan</a>
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
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a class="btn btn-warning" href="/karyawan/{{$k->id}}/edit">Edit</a>
                    <form action="/karyawan/{{$k->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete" onclick="confirm('Sure ?')">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection