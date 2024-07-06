<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Promedio</title>
    <link rel="stylesheet" href="publico/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="contenedor">
        <h1 class="titulo"><i class="fa-solid fa-calculator"></i> Calculador de Notas</h1>
        <form class="formulario_cantidad" action="index.php" method="post" autocomplete="off">
            <p>
                Cantidad de Notas:
                <input type="text" name="txtCantidad" id="txtCantidad">
            </p>
            <p>
                <button class="boton_ingresar" type="submit"><i class="fa-solid fa-keyboard"></i> Ingresar Notas</button>
                <a class="consulta" href="index.php"><i class="fa-solid fa-circle-plus"></i> Nueva Consulta</a>
            </p>
        </form>

        <?php
        if ($_POST) {
            $cantidad = $_POST['txtCantidad'];
            $i = 1;                             /* contar el número de cajas de texto  */
        ?>
            <h3 class="subtitulo">Promedio de <?php echo $cantidad?> Notas Ingresadas</h3>
            <form class="formulario_calcular" action="calcular.php" method="post" autocomplete="off">
                <?php

                while ($i <= $cantidad) {             /* itera la cantidad de veces que se introduzca en la cantidad de cajas de texto que ingrese el usuario */
                ?>
                    <p>
                        Nota <?php print $i . ":" ?> <input class="txtNota" type="text" name="txtNota<?php print $i ?>">
                    </p>
                <?php
                    $i++;
                }
                ?>
                <button class="boton_calcular" type="submit">Calcular</button>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>