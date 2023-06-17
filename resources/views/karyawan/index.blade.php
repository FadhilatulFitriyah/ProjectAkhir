<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>Perusahaan</title>
</head>
<style>
.container {
    width: 100%;
    margin-top: 2%;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.7);
    padding: 3%;
    $gradient: linear-gradient(150deg, rgba($white, .12), rgba($white, 0))
}
</style>

<body>
    @extends('layouts.master')

    @section('content')
    <div class="container">
        <h1 class="text-center my-4" style="font-family: Tekton Pro"> DATA KARYAWAN </h1>
        <h4 class="text-center" style="font-family: Chekky Rabbit">PT. Indonesia</h4>
        <div class="btn-group" role="group" aria-label="Basic example">
            <div class="col card-header my-3">
                <a class="btn btn-primary bi bi-patch-plus" style="font-family: Tekton Pro"
                    href="/karyawan/create">Tambah Data</a>
            </div>
            <form action="{{route('logout')}}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <div class="col card-header my-3">
                    <button class="btn btn-danger bi bi-box-arrow-right" style="font-family: Tekton Pro"
                        type="submit">Logout</button>
                </div>
            </form>
        </div>
        <table class="table table-striped table-bordered text-center">
            <tr>
                <th style="background-color: #E6E6FA;" scope="col">ID</th>
                <th style="background-color: #ADD8E6;" scope="col">Nama</th>
                <th style="background-color: #E6E6FA;" scope="col">NIK</th>
                <th style="background-color: #ADD8E6;" scope="col">Jenis Kelamin</th>
                <th style="background-color: #E6E6FA;" scope="col">Jabatan</th>
                <th style="background-color: #ADD8E6;" scope="col">Alamat</th>
                <th style="background-color: #E6E6FA;" scope="col">Aksi</th>
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
                            <a href="/karyawan/{{$k->id}}/edit" class='btn btn-warning bi bi-pencil-square'
                                class="btn btn-warning">Edit</a>
                        </div>
                        <div class="class container">
                            <form action="/karyawan/{{$k->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class='btn btn-danger bi bi-trash' type="submit" value="Delete"
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