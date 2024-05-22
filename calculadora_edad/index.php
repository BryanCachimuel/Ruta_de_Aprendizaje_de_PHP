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
</head>
<body>

    <div class="container">
        <h3>Calcular edad Automaticaamente a partir de la fecha de nacimiento</h3>
        <div class="row">
            <div class="col-md-3">
                <label for="calendario">Escribe tu fecha de nacimiento</label>
                <input type="text" name="calendario" id="calendario" class="form-control input-sm" readonly>
                
                <span class="label label-success">
                    <span id="edadCalculada"></span>
                </span>
                
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $("#calendario").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:' + 2024,
            dateFormat: "yy-mm-dd"
        });
    });
</script>