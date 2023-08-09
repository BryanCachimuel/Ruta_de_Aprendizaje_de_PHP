<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Práctica Código de Barras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="public/lib/JsBarcode.all.min.js"></script>
  </head>
  <body> 
    <div class="container">
    <h1 class="mt-4">Código de Barras</h1>
        <div class="row">
            <div class="col-md-4">
                <form action="public/functions/insertar.php" method="POST" autocomplete="off">
                    <label for="">Nombre Farmaco:</label>
                    <input type="text" name="nombre_farmaceutico" class="form-control">
                    <br>
                    <button class="btn btn-primary" type="submit">Generar Código de Barras</button>
                </form>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-10">
                <?php require_once "public/helpers/tabla.php"; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
