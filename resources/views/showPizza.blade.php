@extends('layout')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <p><b>Nombre</b> {{$pizza->name}}</p>
            <p><b>Detalles</b> {{$pizza->details}}</p>
            <p><b>Precio</b> {{$pizza->price}}</p>
            <a href="{{route('pizzas.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </div>
</div>
@endsection