@extends('partials.templateAdm')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Topup | Admin</title>
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
        Dashboard
    @endsection

    @section('name')
        Welcome Ikii
    @endsection

    @section('dashboard')
        
    @endsection

    @section('logout')
        
    @endsection
</body>