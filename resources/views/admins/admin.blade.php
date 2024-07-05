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
            </div>
                <div class="col-md6">
                    Data Admin Rumah Makan
                </div>
                <div class="col-md-6 text-end">  
                    <a class="btn btn-primary" href="/createadmin" role="button">Insert Admin</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">no</th>
                <th scope="col">nama</th>
                <th scope="col">jabatan</th>
                <th scope="col">nohp</th>
                <th scope="col">foto</th>
                <th scope="col">delete</th>
                <th scope="col">edit</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($admin as $item)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama_admin }}</td>
                        <td>{{ $item->jabatan_admin }}</td>
                        <td>{{ $item->nohp_admin }}</td>
                        <td><img src="{{ asset('storage/uploads/'. $item->foto_admin) }}" alt="" width="80"></td>
                        <td>
                            <a class="btn btn-light btn-sm" href="/editadmin/{{ $item->id }}" role="button">Edit</a></td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="/deleteadmin/{{ $item->id }}" role="button">Delete</a></td>
                        </tr>
                        @endforeach
            </tbody>
            </table>
        </div>
    </div>
@endsection