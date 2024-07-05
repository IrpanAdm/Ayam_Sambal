@extends('layouts.app')
@section('title')
    Admin
@endsection
@section('content')
    <h1>Product</h1>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Product</li>
  </ol>
</nav>
<hr>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                Data Product Rumah Makan
            </div>
            <div class="col-md-6 text-end">  
                <a class="btn btn-primary" href="/crreateproduct" role="button">Insert Product</a>
            </div>
        </div>
        <div class="card-body">
            <form action="/saveproduct" class="row" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="product_product" id="nama_product" placeholder="Masukan Nama product">
                    <div class="mt2 text-denger">
                        @error('nama_product')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">price</label>
                    <textarea class="form-control" name="price_product" id="price_product"></textarea>
                    <div class="mt2 text-denger">
                        @error('price_product')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for=jk class="form-label">Status</label>
                    <select name="status_product" id="status" class="form-select">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="best product">best product</option>
                        <option value="non best product">non best product</option>
                    </select>
                    <div class="mt2 text-denger">
                        @error('status_product')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Stock" class="form-label">Stock Produck</label>
                    <input type="stock" class="form-control" name="stock_product" id="stock" placeholder="">
                    <div class="mt2 text-denger">
                    @error('stock_product')
                        {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="sublayer" class="form-label">Sublayer Produck</label>
                    <input type="pssword" class="form-control" name="suplayer_product" id="sublayer" placeholder="">
                    <div class="mt2 text-denger">
                    @error('suplayer_product')
                        {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="foto_product" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto_product" id="foto_product" placeholder ="Masukan Foto">
                    <div class="mt2 text-denger">
                    @error('foto_product')
                        {{ $message }}
                    @enderror
                </div>
                <div class = "mt-3">
                    <button class ="btn btn-primary" type="submit" >Save Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection