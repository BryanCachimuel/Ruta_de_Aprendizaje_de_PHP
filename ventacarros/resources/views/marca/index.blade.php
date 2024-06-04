@extends('welcome')

@section('content')

    @if ($message = Session::get('mensaje'))
        <script>
            Swal.fire({
                title: "Proceso Exitoso",
                text: "{{ $message }}",
                icon: "success",
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif

    <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#crearmarca">
        <i class="fa-solid fa-circle-plus"></i> Agregar Nueva Marca
    </button>

    <div class="table-responsive mt-5">
        <table class="table" id="tablamarcas">
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
                        <td scope="row">{{ $marca->id_marca }}</td>
                        <td>{{ $marca->nombre_marca }}</td>
                        <td>{{ $marca->descripcion_marca }}</td>
                        <td>
                            <button class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#editarmarca{{ $marca->id_marca }}"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#eliminarmarca{{ $marca->id_marca }}"><i
                                    class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <!-- invocando al modal de actualización marca -->
                    @include('marca.info')
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- invocando al modal de creacion marca -->
    @include('marca.create')
@endsection
