<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensualidades Universidad</title>
    <link rel="stylesheet" href="publico/css/estilos.css">
</head>

<body>
    <section>

        <?php
        error_reporting(0);

        $estudiante = $_POST['txtEstudiante'];
        $categoria = $_POST['selCategoria'];
        $notaUno = $_POST['txtNota1'];
        $notaDos = $_POST['txtNota2'];
        $notaTres = $_POST['txtNota3'];

        if ($categoria == "A") $selA = 'SELECTED';
        else $selA = '';
        if ($categoria == "B") $selB = 'SELECTED';
        else $selB = '';
        if ($categoria == "C") $selC = 'SELECTED';
        else $selC = '';
        if ($categoria == "D") $selD = 'SELECTED';
        else $selD = '';

        $aMensaje = "";
        $cMensaje = "";
        $nMensajeUno = "";
        $nMensajeDos = "";
        $nMensajeTres = "";

        if (isset($_POST['btnEnviar'])) {
            if (empty($estudiante)) $aMensaje = "Debe Ingresar el nombre del estudiante";
            if ($categoria == "Seleccione") $cMensaje = "Debe Seleccionar una Categoría";
            if (empty($notaUno) || !is_numeric($notaUno)) $nMensajeUno = "Debe Ingresar Correctamente su Nota 1";
            elseif ($notaUno < 1 || $notaUno > 10) $nMensajeUno = "La Nota 1 debe ser entre 1 y 10";
            if (empty($notaDos) || !is_numeric($notaDos)) $nMensajeDos = "Debe Ingresar Correctamente su Nota 2";
            elseif ($notaDos < 1 || $notaDos > 10) $nMensajeDos = "La Nota 2 debe ser entre 1 y 10";
            if (empty($notaTres) || !is_numeric($notaTres)) $nMensajeTres = "Debe Ingresar Correctamente su Nota 3";
            elseif ($notaTres < 1 || $notaTres > 10) $nMensajeTres = "La Nota 3 debe ser entre 1 y 10";
        }

        if (isset($_POST['btnCalcular'])) {
            $promedio = (($notaUno + $notaDos + $notaTres) / 3);
        }
        ?>

        <form action="index.php" method="post" autocomplete="off">
            <table>
                <h4 id="titulo">Formulario de Mensualidades</h4>
                <tr>
                    <td>Nombre del Estudiantes: </td>
                    <td>
                        <input class="nombre" type="text" name="txtEstudiante" size="35" value="<?php echo $estudiante; ?>">
                    </td>
                    <td class="error"><?php echo $aMensaje; ?></td>
                </tr>

                <tr>
                    <td>Seleccione la Categoría: </td>
                    <td>
                        <select name="selCategoria" SELECTED class="selectCategoria">
                            <option value="Seleccione">Seleccione Categoría</option>
                            <option value="A" <?php echo $selA; ?>>A</option>
                            <option value="B" <?php echo $selB; ?>>B</option>
                            <option value="C" <?php echo $selC; ?>>C</option>
                            <option value="D" <?php echo $selD; ?>>D</option>
                        </select>
                    </td>
                    <td class="error"><?php echo $cMensaje; ?></td>
                </tr>

                <tr>
                    <td>Nota 1</td>
                    <td>
                        <input class="nota1" type="text" name="txtNota1" value="<?php echo $notaUno; ?>">
                    </td>
                    <td class="error"><?php echo $nMensajeUno; ?></td>
                </tr>

                <tr>

                    <td>Nota 2</td>
                    <td>
                        <input class="nota2" type="text" name="txtNota2" value="<?php echo $notaDos; ?>">
                    </td>
                    <td class="error"><?php echo $nMensajeDos; ?></td>
                </tr>

                <tr>
                    <td>Nota 3</td>
                    <td>
                        <input class="nota3" type="text" name="txtNota3" value="<?php echo $notaTres; ?>">
                        <button type="submit" class="btn_calcular" name="btnCalcular">Calcular</button>
                    </td>
                    <td class="error"><?php echo $nMensajeTres; ?></td>
                </tr>

                <tr>
                    <td>Promedio Bimestral: </td>
                    <td>
                        <input class="promedio" type="text" name="txtPromedio" disabled value="<?php echo number_format($promedio, 2, '.', ','); ?>">
                    </td>
                </tr>

                <?php
                if (!empty($estudiante) && $categoria != "Seleccione" && $promedio >= 1 && $promedio <= 10) {
                    if ($categoria == "A") $montoMensual = 850;
                    if ($categoria == "B") $montoMensual = 750;
                    if ($categoria == "C") $montoMensual = 650;
                    if ($categoria == "D") $montoMensual = 550;

                    if ($promedio < 6) $descuento = 0;
                    if ($promedio >= 7) $descuento = (20 / 100) * $montoMensual;
                    if ($promedio >= 8) $descuento = (30 / 100) * $montoMensual;
                    if ($promedio >= 9) $descuento = (40 / 100) * $montoMensual;
                    if ($promedio >= 10) $descuento = (50 / 100) * $montoMensual;

                    $montoCancelar = $montoMensual - $descuento;
                }
                ?>

                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn_limpiar">Limpiar</button>
                        <a href="index.php" class="btn_nueva">Nueva Consulta</a>
                    </td>
                </tr>

                <tr>
                    <td>Monto Mensualidad: </td>
                    <td>$ <?php echo number_format($montoMensual, 2, '.', ','); ?></td>
                </tr>

                <tr>
                    <td>Monto Descuento: </td>
                    <td>$ <?php echo number_format($descuento, 2, '.', ','); ?></td>
                </tr>

                <tr>
                    <td>Monto a Cancelar:</td>
                    <td id="monto_cancelar">$ <?php echo number_format($montoCancelar, 2, '.', ','); ?></td>
                </tr>

            </table>
        </form>
    </section>

    <footer>
        <h6 id="centrado"> los Derechos Reservados Rixler Corp <?php echo date('Y') ?></h6>
    </footer>
</body>

</html>