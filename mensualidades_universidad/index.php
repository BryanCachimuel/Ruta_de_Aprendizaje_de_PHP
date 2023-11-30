<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensualidades Universidad</title>
    <link rel="stylesheet" href="publico/css/estilos.css">
</head>
<body>
    <header>
        <h3 id="centrado">Mensualidad Universitaria</h3>
        <img src="publico/img/estudiantes.jpg" alt="estudiantes">
    </header>

    <section>

    <?php
        error_reporting(0);

        $estudiante = $_POST['txtEstudiante'];
        $categoria = $_POST['selCategoria'];
        $promedio = $_POST['txtPromedio'];

        if($categoria == "A") $selA = 'SELECTED';
        else $selA = '';
        if($categoria == "B") $selB = 'SELECTED';
        else $selB = '';
        if($categoria == "C") $selC = 'SELECTED';
        else $selC = '';
        if($categoria == "D") $selD = 'SELECTED';
        else $selD = '';

        $aMensaje = "";
        $cMensaje = "";
        $pMensaje = "";

       if(isset($_POST['btnEnviar'])){
            if(empty($estudiante)) $aMensaje = "Debe Ingresar el nombre del estudiante";
            if($categoria == "Seleccione") $cMensaje = "Debe Seleccionar una Categoría";
            if(empty($promedio) || !is_numeric($promedio)) $pMensaje = "Debe Ingresar Correctamente su Promedio";
            elseif($promedio < 1 || $promedio > 10) $pMensaje = "El promedio debe ser entre 1 y 10";
       }
    ?>

        <form action="index.php" method="post">
            <table>
                <h4 id="titulo">Formulario de Mensualidades</h4>
                <tr>
                    <td>Nombre del Estudiantes: </td>
                    <td>
                        <input type="text" name="txtEstudiante" size="35" value="<?php echo $estudiante; ?>">
                    </td>
                    <td class="error"><?php echo $aMensaje; ?></td>
                </tr>

                <tr>
                    <td>Seleccione la Categoría: </td>
                    <td>
                        <select name="selCategoria" SELECTED>
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
                    <td>Ingrese Promedio Bimestral: </td>
                    <td>
                        <input type="text" name="txtPromedio" size="35" value="<?php echo $promedio; ?>">
                    </td>
                    <td class="error"><?php echo $pMensaje; ?></td>
                </tr>

                <?php
                    if(!empty($estudiante) && $categoria != "Seleccione" && $promedio >= 1 && $promedio <= 10){
                        if($categoria == "A") $montoMensual = 850;
                        if($categoria == "B") $montoMensual = 750;
                        if($categoria == "C") $montoMensual = 650;
                        if($categoria == "D") $montoMensual = 550;

                        if($promedio < 6) $descuento = 0;
                        if($promedio >= 7) $descuento = (20/100) * $montoMensual; 
                        if($promedio >= 8) $descuento = (30/100) * $montoMensual;
                        if($promedio >= 9) $descuento = (40/100) * $montoMensual;
                        if($promedio >= 10) $descuento = (50/100) * $montoMensual;

                        $montoCancelar = $montoMensual - $descuento;
                    }
                ?>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btnEnviar" value="Procesar">
                    </td>
                </tr>

     

            </table>
        </form>
    </section>

    <footer>
        <h6 id="centrado"> los Derechos Reservados Rixler Corp</h6>
    </footer>
</body>
</html>