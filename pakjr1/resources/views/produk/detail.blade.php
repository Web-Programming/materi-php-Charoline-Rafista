@extends('template')

@section('title', 'Ini Halam Detail')

@section('navbar')
    @parent
    <b>Ini Bisa Diisi Navbar Tambahan<b>
        @endsection

        @section('content')
            <h2>Ini Halaman Detail Produk<h2>
                    Nama Produk : <b>{{ $product_name }}</b><br />
                    Id : <b>{{ $id }}</b>


                    <hr />
                    @for ($i = 0; $i < 5; $i++)
                        Data {{ $i }} <br />
                    @endfor
                @endsection

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">{{$title}}</h1>

    <p>Nama Produk: {{$product['name'] }}</p>
    <p>ID Produk: {{ $product['id'] }}</p>
    <p>Price: Rp {{ number_format($product['price'], 2, ',','.') }}</p>
    <hr>
    <a href="{{ url("/produk") }}" class="btn btn-primary">Kembali</a>
</div>
@endsection
