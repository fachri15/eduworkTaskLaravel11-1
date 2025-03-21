<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Produk') }}
        </h2>
    </x-slot>

    <div class="container mt-5 px-4">
        <a href="{{ route('products-tambah') }}" class="btn btn-primary mb-3">Tambah
            Produk</a>

        <div class="card shadow-sm p-4">

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)

                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>Rp {{number_format($product->price, 0, ",", ".")}}</td>
                        <td><img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid" style="max-height: 150px"></td>
                        <td>
                            <a href="{{ route('products-edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="hapusKategori(1)">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $products->links() }}


        </div>

    </div>


</x-app-layout>
