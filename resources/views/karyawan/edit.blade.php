@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Edit Data Karyawan</h1>

    <form action="/karyawan/{{$karyawan->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID Karyawan</label>
            <input type="text" name="id" class="form-control" id="id" required="" value="{{$karyawan->id}}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Karyawan</label>
            <input type="text" name="nama" class="form-control" id="nama" required="" value="{{$karyawan->nama}}">
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK Karyawan</label>
            <input type="text" name="nik" class="form-control" id="nik" required="" value="{{$karyawan->nik}}">
        </div>
        <select class="form-select" name="jenis_kelamin" required="">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select><br>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan Karyawan</label>
            <input type="text" name="jabatan" class="form-control" id="jabatan" required=""
                value="{{$karyawan->jabatan}}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Karyawan</label>
            <textarea class="form-control" name="alamat" rows="10" required="" value="{{$karyawan->alamat}}"></textarea>
        </div>
        <input class="btn btn-warning" type="submit" name="submit" value="Update">
    </form>