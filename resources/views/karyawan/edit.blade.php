<h1>Edit Data Karyawan</h1>

<form action="/karyawan/{{$karyawan->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="id" placeholder="Masukkan ID" value="{{$karyawan->id}}"><br>
    <input type="text" name="nama" placeholder="Masukkan Nama" value="{{$karyawan->nama}}"><br>
    <input type="text" name="nik" placeholder="Masukkan NIK" vvalue="{{$karyawan->nik}}"><br>
    <select name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if($karyawan->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
        <option value="P" @if($karyawan->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <input type="text" name="jabatan" placeholder="Masukkan Jabatan" value="{{$karyawan->jabatan}}"><br>
    <textarea name="alamat" rows="10" placeholder="Masukkan Alamat" value="{{$karyawan->alamat}}"></textarea><br>
    <input type="submit" name="submit" value="Update">
</form>