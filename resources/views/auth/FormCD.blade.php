<title> Formulario de CD</title>

@extends('layouts.auth-master')  
@section('content')
    @auth 
    <p class="fs-2" style="text-align:left">Bienvenido {{auth()->user()->name ?? auth()->user()->username}}</p>
    @endauth

    <form action="/guardarCD" method="POST">
    @csrf
    <h1> Guardar Cd o Casete </h1>
    @include('layouts.partials.messages')
    <div class="form-floating mb-3">
        <input type="text" placeholder="Interprete" name="interprete" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Interprete</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" placeholder="Descripcion" name="descripcion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Descripcion</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" placeholder="Número de Canciones" name="NCanciones" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Número de canciones</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" placeholder="Cantidad" name="cantidad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Cantidad</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" placeholder="Precio de Compra" name="PCompra" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Precio de Compra</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" placeholder="Precio de Venta" name="PVenta" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Precio de Venta</label>
    </div>
    <div class="form-floating mb-3">
        <input type="date" placeholder="Fecha de Ingreso" name="fecha_ingreso" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Fecha de Ingreso</label>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection

