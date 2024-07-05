@extends('layouts.app')
@section('title')
    Update
@endsection
@section('content')
<h2 class= "mt-3">Update Product</h2>
    <hr>
    <div class="card">
  <div class="card-header">
        Formulir Edit Product
  </div>
  <div class="card-body">
        <form action="/updateproduct/{{$product->id}}" class="row" method = "post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class = "col-md-12">
                <label for="product" class = "form-label">Product</label>
                <input type="text" value ="{{$product->product}}" class = "form-control" name="product" id = "product" placeholder="--Masukan Nama Product--">
            </div>
            <div>
                 @error('product')
                     {{$message}}
                 @enderror
            </div>
            <div class = "col-md-12">
                <label for="suplayer" class = "form-label">SupLayer</label>
                <input type="text"  value ="{{$product->suplayer}}" class = "form-control" name="suplayer" id = "suplayer" placeholder="--Masukan SupLayer Product--">

                <div>
                 @error('suplayer')
                     {{$message}}
                 @enderror
            </div>
            <div class = "col-md-12">
                <label for="stock" class = "form-label">Stock</label>
                <input type="text"  value ="{{$product->stoct}}" class = "form-control" name="stock" id = "stock" placeholder="--Masukan Stock Product--">
                <div>
                 @error('stock')
                     {{$message}}
                 @enderror
            </div>
            <div class = "col-md-12">
                <label for="price" class = "form-label">Price</label>
                <input type="price"  value ="{{$product->price}}" class = "form-control" name="price" id = "price" placeholder="--Masukan Price Product--">
                <div>
                 @error('price')
                     {{$message}}
                 @enderror
             </di>
            <div class = "col-md-12">
                <label for="status" class = "form-label">Status</label>
                <select name ="status" id = "status"  value ="{{$product->status}}" class ="form-select" >
                    @if ($product->status=='best product')
                        <option value="{{$product->status}}">{{$product->status}}</option>
                        <option value="non best product">Non Best Product</option>
                    @else
                        <option value ="{{$product->status}}">{{$product->status}}</option>
                        <option value="best product">Best Product</option>
                    @endif
                </select>
                <div class ="mt-2">
                @error('status')
                     {{$message}}
                 @enderror
                </div>
            </div>
            <div class = "col-md-12">
                <label for="foto" class = "form-label">Foto</label>
                <input type="hidden"  name="foto_lama" id = "foto_admin" value ="{{$product->foto}}">
                <input type="file" class = "form-control" name="foto" id = "foto" placeholder="--Masukan Foto Product--">
                <div>
                 @error('foto')
                     {{$message}}
                 @enderror
            </div>

            <div class = "mt-3">
                <button class ="btn btn-primary" type ="submit" >Edit Product</button>
            </div>
        </form>
  </div>
</div>
@endsection