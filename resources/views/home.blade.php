   @extends('layout')
   @section('title', 'E-Commerce Website')
   @section('content')
   <style>
    .thumbnail-product{
        background-position: center;
        background-size: cover;
        height: 300px;
        width: 100%
    }
   </style>
   <!-- Hero Section -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Selamat Datang di Toko Online Kami</h1>
            <p class="lead">Temukan produk terbaik dengan harga terbaik!</p>
            <a href="#produk" class="btn btn-light btn-lg">Lihat Produk</a>
        </div>
    </header>

    <!-- Daftar Produk -->
    <section id="produk" class="container mt-4 py-5">
        <h2 class="text-center mb-4">Produk Terbaru</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <div class="thumbnail-product" style="background-image: url({{ Storage::url($product->image) }});"></div>
                    {{-- <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}"> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="text-primary fw-bold">Rp {{ number_format($product->price, 0,",", ".") }}</p>
                        <a href="{{ route('product.click', $product->id) }}" target="_blank" class="btn btn-success">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            <div class="row mt-4">
                <div class="col-12">
                    {{ $products->links() }}
                </div>
            </div>

{{--
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produk 2">
                    <div class="card-body">
                        <h5 class="card-title">Produk 2</h5>
                        <p class="card-text">Deskripsi singkat produk.</p>
                        <p class="text-primary fw-bold">Rp 200.000</p>
                        <a href="#" class="btn btn-success">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Produk 3">
                    <div class="card-body">
                        <h5 class="card-title">Produk 3</h5>
                        <p class="card-text">Deskripsi singkat produk.</p>
                        <p class="text-primary fw-bold">Rp 250.000</p>
                        <a href="#" class="btn btn-success">Beli Sekarang</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
