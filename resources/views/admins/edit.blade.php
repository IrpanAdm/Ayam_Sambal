@extends('layouts.app')
@section('title')
    Admin
@endsection
@section('content')
    <h1>Admin</h1>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Admin</li>
  </ol>
</nav>
<hr>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                Data Admin Rumah Makan
            </div>
            <div class="col-md-6 text-end">  
                <a class="btn btn-primary" href="/crreateadmin" role="button">Insert Admin</a>
            </div>
        </div>
        <div class="card-body">
            <form action="/updetadmin/{{$admin->id}}" class="row" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_admin" id="nama_admin" value="{{ $admin->nama_admin}}">
                    <div class="mt2 text-denger">
                        @error('nama_admin')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Alamt Admin</label>
                    <textarea class="form-control" name="alamat_admin" id="alamat admin" row="5">{{ $admin->alamat_admin}}</textarea>
                    <div class="mt2 text-denger">
                        @error('alamat_admin')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for=jk class="form-label">Jenis Kelamin</label>
                    <select name="jk_admin" id="jk" class="form-select">
                    @if ($admin->jk_admin == 'pria')
                            <option value="{{ $admin->jk_edit}}">{{ $admin->edit }}</option>
                            <option value="pria">pria</option>
                        @else
                            <option value="{{ $admin->jk_edit }}">{{ $admin->edit }}</option>
                            <option value="wanita">wanita</option>
                        @endif
                    </select>
                    <div class="mt2 text-denger">
                        @error('jk_admin')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Admin</label>
                    <input type="email" class="form-control" name="email_admin" id="email" value="{{ $admin->email}}">
                    <div class="mt2 text-denger">
                    @error('email_admin')
                        {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="text" class="form-label">Jabatan Admin</label>
                    <input type="text" class="form-control" name="jabatan_admin" id="masuk" value="{{ $admin->jabatan_admin }}">
                    <div class="mt2 text-denger">
                    @error('jabatan_admin')
                        {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="nohp_admin" class="form-label">No.Hendphone Admin</label>
                    <input type="text" class="form-control" name="nohp_admin" id="nohp_admin" value="{{ $admin->nohp_admin}}">
                    <div class="mt2 text-denger">
                    @error('nohp_admin')
                        {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="foto_admin" class="form-label">Foto</label>
                    <input type="hidden" name="foto_lama" id="foto_admin" value="{{ $admin->foto_admin}}">
                    <input type="file" class="form-control" name="foto_admin" id="foto_admin" placeholder ="Masukan Foto">
                    <div class="mt2 text-denger">
                    @error('fofo_admin')
                        {{ $message }}
                    @enderror
                </div>
                <div class = "mt-3">
                    <button class ="btn btn-primary" type="submit" >Save Admin</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection