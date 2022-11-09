<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="icon" href="../img/home.png">
    <title>Home</title>
</head>

<body>
@extends('layouts.app-master')
@section('content')
    @auth 
    <p class="fs-2">Bienvenido {{auth()->user()->name ?? auth()->user()->username}}</p>
    @endauth 

    <h1 class="display-2" style="text-align: center; margin-top: 2%;">Menu Principal</h1>    
    <div class="container" style="margin:auto">
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card text-dark bg-light mb-3">
                        <h5 class="card-title" style="text-align: center; margin: 3%">Usuarios</h5>
                        <img src="{{url('/img/users.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="../Inventarios/Usuarios.php" class="btn btn-primary">Entrar</a>
                        </div>
                    </div>

                    <div class="card text-dark bg-light mb-3">
                        <h5 class="card-title" style="text-align: center; margin: 3%">Discos de Vinil</h5>
                        <img src="{{url('/img/vinil.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="/FormVinilos" class="btn btn-primary">Entrar</a>
                        </div>
                    </div>

                    <div class="card text-dark bg-light mb-3">
                        <h5 class="card-title" style="text-align: center; margin: 3%">CD o Casete</h5>
                        <img src="{{url('/img/users.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="/FormCD" class="btn btn-primary" class="btn">Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin:auto;">
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <div class="card text-dark bg-light mb-3">
                        <h5 class="card-title" style="text-align: center; margin: 3%">Proveedor</h5>
                        <img src="{{url('/img/users.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="../Inventarios/Proveedores.php" class="btn btn-primary">Entrar</a>
                        </div>
                    </div>
                    <div class="card text-dark bg-light mb-3">
                        <h5 class="card-title" style="text-align: center; margin: 3%">Compras</h5>
                        <img src="{{url('/img/buy.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="../Inventarios/Compras.php" class="btn btn-primary"> Entrar </a>
                        </div>
                    </div>
                    <div class="card text-dark bg-light mb-3">
                        <h5 class="card-title" style="text-align: center; margin: 3%">Ventas</h5>
                        <img src="{{url('/img/sales.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="../Inventarios/Ventas.php" class="btn btn-primary">Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    @endsection
</body>

</html>