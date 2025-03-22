<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="container mt-5 mb-5">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="namaProduk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="namaProduk" placeholder="Masukkan nama produk"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsiProduk" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="description" id="deskripsiProduk" rows="3"
                                    placeholder="Masukkan deskripsi produk" required>{{ old('description') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="stokProduk" class="form-label">Stok</label>
                                <input type="number" class="form-control" name="stock" value="{{ old('stock') }}" id="stokProduk" placeholder="Masukkan jumlah stok"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="hargaProduk" class="form-label">Harga</label>
                                <input type="number" class="form-control" name="price" value="{{ old('price') }}" id="hargaProduk"
                                    placeholder="Masukkan harga produk" required>
                            </div>
                            <div class="mb-3">
                                <label for="gambarProduk" class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" name="image" id="gambarProduk" accept="image/*" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategoriProduk" class="form-label">Kategori Produk</label>
                                <select class="form-select" name="product_category_id" id="kategoriProduk" required>
                                    <option selected disabled>Pilih kategori</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('product_category_id') == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
