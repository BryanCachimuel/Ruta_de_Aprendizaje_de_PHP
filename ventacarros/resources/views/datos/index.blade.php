@extends('welcome')
@section('content')
    <div class="row mt-4">
        <div class="col-md-3">
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
    </div>
@endsection
