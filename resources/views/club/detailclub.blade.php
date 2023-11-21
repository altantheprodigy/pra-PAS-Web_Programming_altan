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
        <h1>Detail Club</h1>
        <form>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Club" value="{{ $club->nama }}" disabled>
            </div>
            <div class="form-group">
                <label for="nis">Trophy:</label>
                <input type="text" class="form-control" id="trophy" placeholder="Jumlah Trophy" value="{{ $club->trophy }}" disabled>
            </div>
            <div class="form-group">
                <label for="kelas">Desc:</label>
                <input type="text" class="form-control" id="desc" placeholder="Desc" value="{{ $club->desc }}" disabled>
            </div>
            <div class="form-group">
                <label for="kelas">Dibentuk Pada:</label>
                <input type="text" class="form-control" id="dibentuk" placeholder="Dibentuk Pada" value="{{ $club->dibentuk }}" disabled>
            </div>
            <div class="form-group">
                <label for="kelas">Asal negara:</label>
                <input type="text" class="form-control" id="asal" placeholder="Berasal dari" value="{{ $club->asal }}" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Kembali</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
@endsection
