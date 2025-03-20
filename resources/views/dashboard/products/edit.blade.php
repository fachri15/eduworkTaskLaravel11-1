<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Produk') }}
        </h2>
    </x-slot>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="namaProduk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="namaProduk"
                                    placeholder="Masukkan nama produk" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsiProduk" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsiProduk" rows="3"
                                    placeholder="Masukkan deskripsi produk" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="stokProduk" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stokProduk"
                                    placeholder="Masukkan jumlah stok" required>
                            </div>
                            <div class="mb-3">
                                <label for="hargaProduk" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="hargaProduk"
                                    placeholder="Masukkan harga produk" required>
                            </div>
                            <div class="mb-3">
                                <label for="gambarProduk" class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" id="gambarProduk" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategoriProduk" class="form-label">Kategori Produk</label>
                                <select class="form-select" id="kategoriProduk" required>
                                    <option selected disabled>Pilih kategori</option>
                                    <option value="elektronik">Elektronik</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="makanan">Makanan</option>
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
