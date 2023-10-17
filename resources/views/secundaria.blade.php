@extends('layout')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1>Imagen 1</h1>
            <img id="imagen-1" src="#" alt="" class="img-fluid img-thumbnail">
            <p>Consumiendo API publica</p>
        </div>
        <div class="col-lg-6">
            <h1>Imagen 2</h1>
            <img id="imagen-2" src="#" alt="" class="img-fluid img-thumbnail">
            <p>Consumiendo API publica por medio de una acccion</p>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-4">
            <button onclick="generar1()" class="btn btn-primary">Generar 1</button>
        </div>
        <div class="col-lg-4">
            <button onclick="generar2()" class="btn btn-primary">Generar 2</button>
        </div>
        <div class="col-lg-4">
            <button onclick="generarAmbas()" class="btn btn-primary">Generar Ambas</button>
        </div>
    </div>
</div>
@endsection