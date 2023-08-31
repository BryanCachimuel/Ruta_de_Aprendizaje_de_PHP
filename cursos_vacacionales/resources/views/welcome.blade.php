<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursps Vacacionales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1 class="text-center p-3">Cursos Vacacionales</h1>

    @if(session("Correcto"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session("Correcto")}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session("Incorrecto"))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session("Incorrecto")}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="p-5 table-responsive">
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#registrarModal">Registrar Estudiante</button>
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
                    <th></th>
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
                    <td>
                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editarModal"><i class="fa-solid fa-file-pen"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal de editar -->
    <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Información del Curso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nombre_curso" class="form-label">Curso:</label>
                            <input type="text" class="form-control" id="nombre_curso" name="nombre_curso">
                        </div>

                        <div class="mb-3">
                            <label for="nombre_estudiante" class="form-label">Estudiante:</label>
                            <input type="text" class="form-control" id="nombre_estudiante" name="nombre_estudiante">
                        </div>

                        <div class="mb-3">
                            <label for="nombre_instructor" class="form-label">Instructor:</label>
                            <input type="text" class="form-control" id="nombre_instructor" name="nombre_instructor">
                        </div>

                        <div class="mb-3">
                            <label for="actividades" class="form-label">Actividades:</label>
                            <textarea class="form-control" id="actividades" name="actividades" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="instumentos" class="form-label">Instrumentos:</label>
                            <input type="text" class="form-control" id="instumentos" name="instumentos">
                        </div>

                        <div class="mb-3">
                            <label for="valor_curso" class="form-label">Valor Curso:</label>
                            <input type="number" class="form-control" id="valor_curso" name="valor_curso">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de agregar -->
    <div class="modal fade" id="registrarModal" tabindex="-1" aria-labelledby="registrarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="registrarModalLabel">Registar Información</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('crud.create')}}" autocomplete="off" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre_curso" class="form-label">Curso:</label>
                            <input type="text" class="form-control" id="nombre_curso" name="nombre_curso">
                        </div>

                        <div class="mb-3">
                            <label for="nombre_estudiante" class="form-label">Estudiante:</label>
                            <input type="text" class="form-control" id="nombre_estudiante" name="nombre_estudiante">
                        </div>

                        <div class="mb-3">
                            <label for="nombre_instructor" class="form-label">Instructor:</label>
                            <input type="text" class="form-control" id="nombre_instructor" name="nombre_instructor">
                        </div>

                        <div class="mb-3">
                            <label for="actividades" class="form-label">Actividades:</label>
                            <textarea class="form-control" id="actividades" name="actividades" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="instumentos" class="form-label">Instrumentos:</label>
                            <input type="text" class="form-control" id="instumentos" name="instumentos">
                        </div>

                        <div class="mb-3">
                            <label for="valor_curso" class="form-label">Valor Curso:</label>
                            <input type="number" class="form-control" id="valor_curso" name="valor_curso">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>