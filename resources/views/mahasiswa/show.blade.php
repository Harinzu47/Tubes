<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Biodata {{ $mahasiswa->nama }}</title>
    <style>
        body {
            background-color: #f8f9fa; 
        }
        .container {
            background-color: #ffffff; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0,0,0,0.1); 
            padding: 20px;
            margin-top: 20px;
        }
        h1 {
            color: #007bff; 
        }
        hr {
            border-color: #007bff;
        }
        .alert {
            background-color: #d4edda; 
            border-color: #c3e6cb; 
            color: #155724; 
        }
    </style>
</head>
<body>
    <div class="pt-3 d-flex justify-content-end align-items-center">
        <h1 class="h2 mr-auto">Biodata {{$mahasiswa->nama}}</h1>
        <a href="{{ route('mahasiswas.edit',['mahasiswa' => $mahasiswa->id]) }}"
        class="btn btn-primary">Edit</a>
        <form action="{{ route('mahasiswas.destroy',['mahasiswa'=>$mahasiswa->id])
        }}"
        method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
        </form>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Biodata {{ $mahasiswa->nama }}</h1>
                </div>
                <hr>

                @if(session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif

                <ul>
                    <li class="h5">NIM: {{ $mahasiswa->nim }} </li>
                    <li class="h5">Nama: {{ $mahasiswa->nama }} </li>
                    <li class="h5">Jenis Kelamin: {{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }} </li>
                    <li class="h5">Jurusan: {{ $mahasiswa->jurusan }} </li>
                    <li class="h5">Alamat: {{ $mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat }} </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
