@extends('welcome')
@section('content')
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card bg-primary">
                <div class="card-header text-white mx-auto">
                    <h4>Marcas</h4>
                </div>
                <div class="card-body mx-auto">
                    @php
                        $contador_de_marcas = 0;
                    @endphp
                    @foreach ($marcas as $marca)
                        @php
                            $contador_de_marcas += 1;
                        @endphp
                    @endforeach

                    <h5 class="mb-4 mt-4 text-white">Cantidad de Marcas: <?= $contador_de_marcas ?></h5>

                </div>
                <div class="card-footer text-body-secondary mx-auto">
                    <a href="{{ url('marcas') }}" class="btn btn-outline-light"><i class="fa-solid fa-angles-right"></i> Más Información</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success">
                <div class="card-header text-white mx-auto">
                    <h4>Clientes</h4>
                </div>
                <div class="card-body mx-auto">
                    @php
                        $contador_de_clientes = 0;
                    @endphp
                    @foreach ($clientes as $cliente)
                        @php
                            $contador_de_clientes += 1;
                        @endphp
                    @endforeach

                    <h5 class="mb-4 mt-4  text-white">Cantidad de Clientes: <?= $contador_de_clientes ?></h5>
                    
                </div>
                
                <div class="card-footer text-body-secondary mx-auto">
                    <a href="{{ url('clientes') }}" class="btn btn-outline-light"><i class="fa-solid fa-angles-right"></i> Más Información</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-danger">
                <div class="card-header text-white mx-auto">
                    <h4>Carros</h4>
                </div>
                <div class="card-body mx-auto">
                    @php
                        $contador_de_carros = 0;
                    @endphp
                    @foreach ($carros as $carro)
                        @php
                            $contador_de_carros += 1;
                        @endphp
                    @endforeach

                    <h5 class="mb-4 mt-4 text-white">Cantidad de Carros: <?= $contador_de_carros ?></h5>

                </div>

                <div class="card-footer text-body-secondary mx-auto">
                    <a href="{{ url('carros') }}" class="btn btn-outline-light"><i class="fa-solid fa-angles-right"></i> Más Información</a>
                </div>
            </div>
        </div>
    </div>
@endsection
