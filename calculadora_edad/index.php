<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Edad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="librerias/jquery-ui-1.13.3.custom/jquery-ui.css">
    <script src="librerias/jquery-3.7.1.min.js"></script>
    <script src="librerias/jquery-ui-1.13.3.custom/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container mt-3">
        <h3 class="titulo"><i class="fa-solid fa-calendar-day"></i> Calcular su edad Automaticamente </h3>

        <div class="card seleccionar_fecha">
            <div class="card-body">
                <div class="row">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="calendario"><i class="fa-solid fa-calendar-days"></i> Escribe tu fecha de nacimiento: </label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="calendario" id="calendario" class="form-control input-sm" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 resultado_fecha">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <span class="label label-success">
                            <i class="fa-solid fa-calendar-check"></i> Su Edad es: <span id="edadCalculada"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $("#calendario").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:' + 2024,
            dateFormat: "yy-mm-dd"
        });

        $('#calendario').change(function() {
            $.ajax({
                type: "POST",
                data: "fecha=" + $('#calendario').val(),
                url: "php/calcularEdad.php",
                success: function(r) {
                    $('#edadCalculada').text(r + " años");
                }
            });
        });
    });
</script>