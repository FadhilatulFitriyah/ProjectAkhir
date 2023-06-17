@extends('layouts.master')

@section('content')
<div class="container">
    <h1>create Karyawan</h1>
    <form action="/karyawan/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID Karyawan</label>
            <input type="text" name="id" class="form-control" id="id" required="" placeholder="Masukkan ID">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama </label>
            <input type="text" name="nama" class="form-control" id="nama" required="" placeholder="Masukkan Nama">
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK </label>
            <input type="text" name="nik" class="form-control" id="nik" required="" placeholder="Masukkan NIK">
        </div>
        <select class="form-select" name="jenis_kelamin" required="">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select><br>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan </label>
            <input type="text" name="jabatan" class="form-control" id="jabatan" required=""
                placeholder="Masukkan Jabatan">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat </label>
            <textarea class="form-control" name="alamat" rows="10" required="" placeholder="Masukkan Alamat"></textarea>
        </div>
        <input class="btn btn-success" type="submit" name="submit" value="Save">
    </form>
</div>
@endsection