@extends('layouts.app')
@section('title')
    Product
@endsection
@section('content')
    <h1>Product</h1>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Prpduct</li>
        </ol>
        </nav>
        <hr>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md6">
                        Data Prpduct Rumah Makan
                    <div class="col-md-6 text-end">  
                        <a class="btn btn-primary" href="/createproduct" role="button">Insert Prpduct</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Status</th>
                    <th scope="col">Suplayer</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($product as $item)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->suplayer }}</td>
                            <td>{{ $item->status }}</td>
                            <td><img src="{{ asset('storage/uploads/'. $item->foto) }}" alt="" width="80"></td>
                            <td>
                                <a class="btn btn-light btn-sm" href="/editproduct/{{ $item->id }}" role="button">Edit</a></td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="/deleteproduct/{{ $item->id }}" role="button">Delete</a></td>
                            </tr>
                            @endforeach
                </tbody>
                </table>
            </div>
        </div>
    @endsection