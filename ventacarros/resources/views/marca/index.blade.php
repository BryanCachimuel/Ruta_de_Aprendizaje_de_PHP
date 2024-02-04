@extends('welcome')

@section('content')

<button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#crearmarca">
    Agregar Nueva Marca
</button>

    <div class="table-responsive mt-5">
        <table class="table">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">MARCAS</th>
                    <th scope="col">INFORMACIÓN</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marcas as $marca)
                    <tr class="">
                        <td scope="row">{{$marca->id_marca}}</td>
                        <td>{{$marca->nombre_marca}}</td>
                        <td>{{$marca->descripcion_marca}}</td>
                        <td>
                            <a href="" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<!-- invocando al modal de creacion marca -->
@include('marca.create')

@endsection
