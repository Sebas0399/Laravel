@extends('layout')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col">
            @if($message=Session::get('success'))
            <div class="alert alert-success" role="alert">
                 {{$message}}
            </div>

            @endif
            <form method="post" action="{{route('pizzas.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre de la pizza">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Detalles</label>
                    <textarea name="details" id="descripcion" cols="30" rows="4" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="precio" name="price">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col mt-3 text-end">
            <a href="{{route('pizzas.index')}}" class="btn btn-dark">Regresar</a>
        </div>
    </div>
</div>
@endsection()