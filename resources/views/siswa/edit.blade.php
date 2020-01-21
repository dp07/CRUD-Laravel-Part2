@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-8">
        <h1>Daftar Siswa</h1>
        <form action="/siswa/{{$siswa->id}}/update" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" class="form-control" id="nama_depan" name="namadepan" value="{{$siswa->nama_depan}}">
            </div>
            <div class="form-group">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" class="form-control" id="nama_belakang" name="namabelakang" value="{{$siswa->nama_belakang}}">
            </div>
            <div class="form-group">
                <label for="jenisKelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenisKelamin" name="jeniskelamin">
                    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" value="{{$siswa->agama}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" name="alamat">{{$siswa->alamat}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary float-right">Edit</button>
    </div>
    </form>
</div>
</div>
@endsection