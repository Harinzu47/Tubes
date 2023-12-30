<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa; 
        }
        h1, h2 {
            color: #007bff; 
        }
    </style>
</head>
<body>
    <div class="text-center">
        <h1 class="display-4">Hi Aslab! This is your Student</h1>
        <h2>Ini Adalah Tugas Besar Saya Khalid Jundullah</h2>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary mt-3">Go to Mahasiswas</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
