<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Promedio</title>
</head>

<body>
    <form action="index.php" method="post" autocomplete="off">
        <p>
            Cantidad de Notas:
            <input type="text" name="txtCantidad" id="txtCantidad">
        </p>
        <p>
            <button type="submit">Ingresar Notas</button>
        </p>
    </form>

    <?php
    if ($_POST) {
        $cantidad = $_POST['txtCantidad'];
        $i = 1;                             /* contar el número de cajas de texto  */
    ?>

        <form action="calcular.php" method="post" autocomplete="off">
            <?php

            while ($i <= $cantidad) {             /* itera la cantidad de veces que se introduzca en la cantidad de cajas de texto que ingrese el usuario */
            ?>
                <p>
                    Nota <?php print $i . ":" ?> <input type="text" name="txtNota<?php print $i ?>">
                </p>
            <?php
                $i++;
            }
            ?>
            <button type="submit">Calcular</button>
        </form>
    <?php
    }
    ?>
</body>

</html>