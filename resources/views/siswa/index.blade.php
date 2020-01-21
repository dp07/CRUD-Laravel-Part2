@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar Siswa</h3>
                            <div class="col-lg-12 my-2 float-right">
                                <!-- Button trigger modal -->
                                <div class="right">
                                    <button type="button" class="btn"><i class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 pl-3">
                                    @if(session('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('message')}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Depam</th>
                                        <th>Nama Belakang</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_siswa as $siswa)
                                    <tr>
                                        <td>{{ $siswa->nama_depan }}</td>
                                        <td>{{ $siswa->nama_belakang}}</td>
                                        <td>{{ $siswa->jenis_kelamin}}</td>
                                        <td>{{ $siswa->agama}}</td>
                                        <td>{{ $siswa->alamat}}</td>
                                        <td>
                                            <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-primary btn-sm">edit</a>
                                            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/siswa/create" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" class="form-control" id="nama_depan" name="namadepan">
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" class="form-control" id="nama_belakang" name="namabelakang">
                    </div>
                    <div class="form-group">
                        <label for="jenisKelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenisKelamin" name="jeniskelamin">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
    @endsection