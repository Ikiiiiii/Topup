@extends('partials.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Up | Add Product</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
@section('brand')
    Admin | Add Product
@endsection
<div class="container">
    <form style="margin-top: 6%" action="{{ $action }}" method="POST" enctype="multipart/form-data">
      @csrf
        <table>
            <div class="mt-3 mb-2">
                <label for="" class="form-label">Nama Product</label>
                <input class="form-control" type="text" placeholder="Masukkan nama product" name="namaProduct" id="namaProduct"> 
            </div>
            <div class="mt-3 mb-2">
                <label for="" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5"></textarea>
            </div>
            <div class="mt-3 mb-2">
                <label for="" class="form-label">Harga</label>
                <input type="text" class="form-control" placeholder="Masukkan harga product" name="harga" id="harga">
            </div>
            <div class="mt-3 mb-2">
                <label for="" class="form-label">Foto Product</label>
                <input class="form-control" type="file" name="fotoProduct" id="fotoProduct">
            </div>

            <div class="mt-3 mb-2 d-md-flex justify-content-md-end">
             <input class="btn btn-dark" type="submit" value="Submit">
         </div>
        </table>
    </form>
</div>

</body>
</html>