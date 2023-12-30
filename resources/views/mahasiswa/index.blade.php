<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Data Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.form') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <h2 class="text-primary">Tabel Mahasiswa</h2>
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('mahasiswas.create') }}" class="btn btn-success">
                    Tambah Mahasiswa
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td><a href="{{ route('mahasiswas.show',['mahasiswa' =>
                                    $mahasiswa->id]) }}" class="text-info">{{$mahasiswa->nim}}</a></td>
                                <td>{{$mahasiswa->nama}}</td>
                                <td>{{$mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'}}</td>
                                <td>{{$mahasiswa->jurusan}}</td>
                                <td>{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak ada data</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
