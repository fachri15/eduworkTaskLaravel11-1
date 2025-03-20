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
                    <tr>
                        <td>1</td>
                        <td>Produk A</td>
                        <td>Deskripsi Produk A</td>
                        <td>30</td>
                        <td>Rp 50.000</td>
                        <td><img src="https://placehold.co/150" alt="Produk A"></td>
                        <td>
                            <a href="{{ route('products-edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="hapusKategori(1)">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>


        </div>

    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel">Tambah Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="namaKategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="namaKategori">
                        </div>
                        <div class="mb-3">
                            <label for="jumlahProduk" class="form-label">Jumlah Produk</label>
                            <input type="number" class="form-control" id="jumlahProduk">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" id="editId">
                        <div class="mb-3">
                            <label for="editNamaKategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="editNamaKategori">
                        </div>
                        <div class="mb-3">
                            <label for="editJumlahProduk" class="form-label">Jumlah Produk</label>
                            <input type="number" class="form-control" id="editJumlahProduk">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
