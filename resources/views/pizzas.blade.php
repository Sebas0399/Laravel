@extends('layout')
@section('contenido')
<div class="container">
    <div class="row mt-3 mb-3">
        <a href="{{route('pizzas.create')}}" class="btn btn-primary">Crear nueva pizza</a>

    </div>
    @if($message=Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @endif
    @if($message=Session::get('alert'))
    <div class="alert alert-warning" role="alert">
        {{$message}}
    </div>
    @endif
</div>


<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Detalles</th>
                        <th>Precio</th>
                        <th>Accion</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($pizzas as $key =>$pizza)
                    <tr>
                        <td>{{$pizza->name}}</td>
                        <td>{{$pizza->details}}</td>
                        <td>{{$pizza->price}}</td>
                        <td>
                            <a href="{{route('pizzas.show',$pizza->id)}}" class="btn btn-secondary">Mostrar</a>
                            <a href="{{route('pizzas.edit',$pizza->id)}}" class="btn btn-warning">Editar</a>
                            <form action="{{route('pizzas.destroy',$pizza->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>

                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection()