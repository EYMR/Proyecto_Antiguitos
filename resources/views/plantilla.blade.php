<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Diario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</head>

<body>

    <nav class="navbar-expand-lg navbar-dar bg-success">
        <div class="container-fluid">
            <a class="nav-link {{request()->routeIs('NHome')?'text-warning ':'' }}" href = "/"}> Home </a> 
            <a class="nav-link {{request()->routeIs('NIngresar')?'text-warning ':'' }}" href = "ingresar"}> Ingresar Recuerdos </a> 
            <a class="nav-link {{request()->routeIs('NRecuerdos')?'text-warning ':'' }}" href = "recuerdos"}> Recuerdos </a> 
        </div>
    </nav>


    <!-- Contenido de la Página -->
    @yield('contenido')

    <footer> Enrique Yarin {{date('Y')}} </footer>


</body>

</html>
