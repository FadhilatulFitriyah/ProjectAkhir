@extends('layouts.master')

@section('content')
<div class="container">
    <h1>create Karyawan</h1>

    <form action="/karyawan/store" method="POST">
        @csrf
        <input type="text" name="id" placeholder="Masukkan ID"><br>
        <input type="text" name="nama" placeholder="Masukkan Nama"><br>
        <input type="text" name="nik" placeholder="Masukkan NIK"><br>
        <select name="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select><br>
        <input type="text" name="jabatan" placeholder="Masukkan Jabatan"><br>
        <textarea name="alamat" rows="10" placeholder="Masukkan Alamat"></textarea><br>
        <input type="submit" name="submit" value="save">
    </form>
</div>
@endsection