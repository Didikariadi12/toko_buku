@extends('layout')

@section('title', 'Toko Buku | Beranda')

@section('body')
<div class="wrapper">
    <div class="page-header page-header-small card">

        <img src="{{url('image/book_landing_page.jpg')}}">
        <div class="content-center">
            <div class="container">
                <h1 class="title">Toko Buku</h1>
            </div>
        </div>
    </div>
</div>

<div class="ml-4 mt-5">
    @for($i=0; $i <20 ; $i++) <div class="card mr-4" style="width: 188px; height:356px;">
        <div class="text-center">
            <img class="card-img-top" src="{{url('image/buku_hack_nasa.jpg')}}" style="height:200px; width:auto;">
        </div>
        <div class="card-body">
            <p class="card-text" style="font-size:14px;">Buku Cara Heck Nasa Pakai HTML</p>
            <h6 class="card-title">Rp 200.000</h6>
            <div class="row">
                <span class="col-1 material-icons-sharp me-1" style="color: #FFE61B;">star_purple500</span>
                <p class="col card-text mt-1" style="font-size:12px;">5.0 | Terjual 200</p>
            </div>

        </div>
</div>
@endfor
</div>

@endsection