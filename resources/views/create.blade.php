<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-success">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Online-Shop (Nama pengguna yang login)</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Form Produk
                    </div>
                    <div class="card-body">
                        <form method="post" action="/tambah" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="productName">Nama Produk</label>
                                <input type="text" class="form-control" name="produk"  id="productName" placeholder="Masukkan nama produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="category">Kategori</label>
                                <input type="text" class="form-control" name="kategori" id="category" placeholder="Masukkan kategori produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="price">Harga</label>
                                <input type="number" class="form-control" name="harga" id="price" placeholder="Masukkan harga produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="quantity">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah" id="quantity" placeholder="Masukkan jumlah produk">
                            </div>
                            <div class="form-group pt-2">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" name="foto" id="image">
                            </div>
                            <button type="submit" class="btn btn-secondary w-100 btn-block mt-5">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>