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
            @foreach ($user as $item)
            <a href="#" class="navbar-brand">Online-Shop {{ $item->name }}</a>
            @endforeach
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
                        <a href="/logout" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container pt-5">
        @if (Session('berhasil'))
            <p class="alert alert-success">{{ Session('berhasil') }}</p>
        @endif
        <div class="row">
            <div class="col-md-6">
                <a href="/tambah" class="btn btn-primary">Tambah Data</a><br>
            </div>
            <div class="col-md-6">
                <form action="/beranda/cari" method="get">
                    <div class="input-group mb-3">
                        <input type="text" name="cari" class="form-control" placeholder="Search">
                        <button class="btn btn-success" type="submit">Go</button>
                      </div>
                </form>
            </div>
        </div>
        <p>Total Data Produk: {{ $jumlah }}</p>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>NO</th>
                    <th>PRODUK</th>
                    <th>JUMLAH</th>
                    <th>HARGA</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->produk }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>Rp.{{ $item->harga }}</td>
                    <td><img src="{{ asset('storage/foto/'.$item->foto) }}" alt="" style="width: 50px; height:50px"></td>
                    <td>
                        <a href="/hapus/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                        <a href="/edit/{{ $item->id }}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>