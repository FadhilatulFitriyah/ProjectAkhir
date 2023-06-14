<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    @extends('layouts.master')

    @section('content')
    <div class="container">
        <h1 class="text-center my-4"> DATA KARYAWAN </h1>
        <h4 class="text-center">PT. Indonesia</h4>
        <div class="btn-group" role="group" aria-label="Basic example">
            <div class="col card-header my-3">
                <a class="btn btn-primary" href="/karyawan/create">Add Karyawan</a>
            </div>
            <form action="{{route('logout')}}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <div class="col card-header my-3">
                    <button class="btn btn-danger" type="submit">Logout</button>
                </div>
            </form>
        </div>
        <table class="table table-striped text-center">
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
                        <div class="class container">
                            <a href="/karyawan/{{$k->id}}/edit" class="btn btn-warning">Edit</a>
                        </div>
                        <div class="class container">
                            <form action="/karyawan/{{$k->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete"
                                    onclick="confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection
</body>

</html>