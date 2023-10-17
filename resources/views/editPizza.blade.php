@extends('layout')
@section('contenido')
<div class="container">
    <div class="row ">
        <div class="col">

            <form method="post" action="{{route('pizzas.update',$pizza->id)}}">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre de la pizza" value="{{$pizza->name}}">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Detalles</label>
                    <textarea name="details" id="descripcion" cols="30" rows="4" class="form-control" >{{$pizza->details}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="precio" name="price" value="{{$pizza->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col mt-3 text-end">
            <a href="{{route('pizzas.index')}}" class="btn btn-dark">Regresar</a>
        </div>
    </div>
</div>
@endsection