@extends('partials.templateAdm1')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Topup | Detail Product</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
@section('brand')
        Admin
@endsection

@section('user')
    {{ Auth::user()->name }}
@endsection

@section('tittle')
        Product Detail
@endsection

@section('name')
        You can edit and delete the product here
@endsection

@section('logout')
        
@endsection
    
@section('content')
    <a href="{{ url('product/add') }}"><button class="btn btn-primary btn-sm mb-3">Add Product</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Product</th> 
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Foto</th>
                <th class="text-center">Aksi</th>   
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->namaProduct }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                        <img src="/storage/{{ $item->fotoProduct }}" alt="" width="100" height="100">
                    </td>
                    <td class="d-flex justify-content-center mr-2 ">
                        <a href="/product/edit/{{ $item -> id}}"><button class="btn btn-success btn-sm">Edit</button></a>    
                        <a href="/product/delete/{{ $item -> id}}"><button class="btn btn-danger btn-sm">Hapus</button></a>    
                    </td>     
                </tr>
            @endforeach
        </tbody>   
    </table>   
@endsection

</body>