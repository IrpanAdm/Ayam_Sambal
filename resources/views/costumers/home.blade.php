@extends('layouts.main')
@section('title')
    Home
@endsection
@section('content')

    <section class="hero">
        <main class="content">
            <h1>Perut keroncongan di tanggal tua? Segera datang ke outlet kami!</h1>
            <p>Perut Kenyang Pikiran Tenang</p>
            <a href="/product" class="btn">Beli Sekarang</a>
        </main>
    </section>
    <section class="py-3 about conteiner">
        <div class="container">
        <h1 class="text-center mb-4">Ayam Penyet</h1>
        <div class="row mt-4">
            <div class="col-md-6 ">
                <img src="{{ asset('images/ayam1.jpg')}}" alt="" width="100%">
        </div>
        <div class="col-md-6">
            <h4 class="fst-italic tect-decoration-underline mb-4">KENAPA MAKAN AYAM</h4>
            <p>Ayam geprek adalah makanan ayam goreng tepung khas Indonesia 
                yang diulek atau dilumatkan bersama sambal bajak. Sebagian besar 
                sumber menyebut bahwa ayam geprek berasal dari Kota Yogyakarta. Kini, 
                ayam geprek telah menjadi hidangan populer yang dapat ditemukan di hampir 
                semua kota besar di Indonesia.</p>
                </div>
            </div>
        </section>
    <section class="py-3 product container">
    <h1 class="text-center mb-4">Peroduk Kami</h1>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="{{asset('images/produk1.jpg') }}" 
                class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">AYAM PENYET PAKET LENGKAP</h5>
                    <p class="card-text">Rp. 15.000</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                 </div>
        </div>
        <div class="card">
        <img src="{{asset('images/produk2.webp') }}" 
                class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">AYAM PENYET DOER</h5>
                    <p class="card-text">Rp. 15.000</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
        </div>
        <div class="card">
                <img src="{{asset('images/produk3.jpeg') }}" 
                class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">AYAM PENYET SAMBAL IJO</h5>
                    <p class="card-text">Rp. 15.000</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
        </div>
        <div class="card">
            <img src="{{asset('images/produk4.jpg') }}" 
                class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">AYAM PENYET JUMBO</h5>
                    <p class="card-text">Rp. 15.000</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
            </div>
        </div>
    </div>
    </div>

    </section>

@endsection
