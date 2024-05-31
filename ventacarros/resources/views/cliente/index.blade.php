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

    <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#crearcliente">
        Agregar Nuevo Cliente
    </button>

    <div class="table-responsive mt-5">
        <table class="table text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CEDULA</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">EDAD</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">CONTACTO</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr class="">
                        <td scope="row">{{ $cliente->id_cliente }}</td>
                        <td>{{ $cliente->cedula_cliente }}</td>
                        <td>{{ $cliente->nombre_cliente }}</td>
                        <td>{{ $cliente->edad_cliente }}</td>
                        <td>{{ $cliente->correo_cliente }}</td>
                        <td>{{ $cliente->celular_cliente }}</td>
                        <td>{{ $cliente->direccion_cliente }}</td>
                        <td>
                            <button class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#editarcliente{{ $cliente->id_cliente }}"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#eliminarcliente{{ $cliente->id_cliente }}"><i
                                    class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <!-- invocando al modal de actualización marca -->
                    @include('cliente.info')
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- invocando al modal de creacion marca -->
    @include('cliente.create')
@endsection
