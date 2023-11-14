@extends('layouts.main')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulir Data Siswa</title>
</head>

<body>
    <div class="container mt-5">
        <form>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" value="{{ $pemain->nama }}" disabled>
            </div>
            <div class="form-group">
                <label for="nis">NoPung:</label>
                <input type="text" class="form-control" id="nopung" placeholder="Masukkan NoPung" value="{{ $pemain->nopung }}" disabled>
            </div>
            <div class="form-group">
                <label for="kelas">Club:</label>
                <input type="text" class="form-control" id="club" placeholder="Masukkan Club" value="{{ $pemain->club }}" disabled>
            </div>
            <div class="form-group">
                <label for="kelas">Kelahiran:</label>
                <input type="text" class="form-control" id="kelahiran" placeholder="Masukkan Tanggal Lahir" value="{{ $pemain->kelahiran }}" disabled>
            </div>
            <div class="form-group">
                <label for="kelas">Asal negara:</label>
                <input type="text" class="form-control" id="asal" placeholder="Masukkan Asal" value="{{ $pemain->asal }}" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Kembali</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
@endsection
