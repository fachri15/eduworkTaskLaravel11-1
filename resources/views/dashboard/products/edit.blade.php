<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Produk') }}
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
                        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT') @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name="name" value="{{ $product->name }}" id="name"
                                    placeholder="Masukkan nama produk" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" rows="3"
                                    placeholder="Masukkan deskripsi produk" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="stock" class="form-label">Stok</label>
                                <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" id="stock"
                                    placeholder="Masukkan jumlah stok" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Harga</label>
                                <input type="number" class="form-control" name="price" value="{{ $product->price }}" id="price"
                                    placeholder="Masukkan harga produk" required>
                            </div>
                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" width="100">
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="kategoriProduk" class="form-label">Kategori Produk</label>
                                <select class="form-select" name="product_category_id" id="kategoriProduk" required>
                                    <option selected disabled>Pilih kategori</option>
                                    @foreach ($categories as $category)
                                   <option value="{{ $category->id }}" {{ $product->product_category_id == $category->id ? 'selected' : '' }} >{{ $category->name }}
                                </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
