@extends('layout')
@section('title', 'Shopping Cart')
@section('content')

    <!-- Hero Section -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Keranjang Belanja</h1>
            <p class="lead">Periksa kembali pesanan Anda sebelum checkout.</p>
        </div>
    </header>

    <!-- Tabel Keranjang Belanja -->
    <section class="container my-5">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="https://via.placeholder.com/50" alt="Produk 1" class="me-2">
                            Produk 1
                        </td>
                        <td>Rp 150.000</td>
                        <td><input type="number" class="form-control w-50" value="1"></td>
                        <td>Rp 150.000</td>
                        <td><button class="btn btn-danger btn-sm">Hapus</button></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="https://via.placeholder.com/50" alt="Produk 2" class="me-2">
                            Produk 2
                        </td>
                        <td>Rp 200.000</td>
                        <td><input type="number" class="form-control w-50" value="1"></td>
                        <td>Rp 200.000</td>
                        <td><button class="btn btn-danger btn-sm">Hapus</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Total Harga -->
        <div class="text-end">
            <h4>Total: <span class="text-primary fw-bold">Rp 350.000</span></h4>
            <a href="#" class="btn btn-success btn-lg mt-3">Checkout</a>
        </div>
    </section>

@endsection
