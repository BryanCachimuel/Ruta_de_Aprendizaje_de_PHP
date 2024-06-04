@extends('welcome')
@section('content')
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Marcas
                </div>
                <div class="card-body">
                    <h5 class="card-title">Cantidad de Marcas: </h5>
                    @php
                        $contador_de_marcas = 0;
                    @endphp
                    @foreach ($marcas as $marca)
                        @php
                            $contador_de_marcas += 1;
                        @endphp
                    @endforeach

                    <h3><?= $contador_de_marcas ?></h3>

                    <a href="{{ url('marcas') }}" class="btn btn-primary">Más Información</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Clientes
                </div>
                <div class="card-body">
                    <h5 class="card-title">Cantidad de Clientes: </h5>
                    @php
                        $contador_de_clientes = 0;
                    @endphp
                    @foreach ($clientes as $cliente)
                        @php
                            $contador_de_clientes += 1;
                        @endphp
                    @endforeach

                    <h3><?= $contador_de_clientes ?></h3>

                    <a href="{{ url('clientes') }}" class="btn btn-primary">Más Información</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Carros
                </div>
                <div class="card-body">
                    <h5 class="card-title">Cantidad de Carros: </h5>
                    @php
                        $contador_de_carros = 0;
                    @endphp
                    @foreach ($carros as $carro)
                        @php
                            $contador_de_carros += 1;
                        @endphp
                    @endforeach

                    <h3><?= $contador_de_carros ?></h3>

                    <a href="{{ url('carros') }}" class="btn btn-primary">Más Información</a>
                </div>
            </div>
        </div>
    </div>
@endsection
