<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursps Vacacionales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-3">Cursos Vacacionales</h1>

    <div class="p-5 table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-primary text-center">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Estudiante</th>
                    <th scope="col">Instructor</th>
                    <th scope="col">Actividad</th>
                    <th scope="col">Instrumentos</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody class="table-group-divider text-center">
                @foreach($datos as $cv)
                <tr>
                    <th scope="row">{{$cv->id_curso}}</th>
                    <td>{{$cv->nombre_curso}}</td>
                    <td>{{$cv->nombre_estudiante}}</td>
                    <td>{{$cv->nombre_instructor}}</td>
                    <td>{{$cv->actividades}}</td>
                    <td>{{$cv->instrumentos}}</td>
                    <td><b>$</b> {{$cv->valor_curso}}</td>
                </tr>
                @endforeach  
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>