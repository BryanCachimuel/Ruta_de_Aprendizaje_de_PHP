<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario Empleados</title>
    <link rel="stylesheet" href="publico/css/estilos.css">
</head>
<body>
    <header>
        <h3 id="centrado">PAGO DE SALARIO DE EMPLEADOS</h3>
        <img src="publico/img/empleados.jpeg">
    </header>

    <section>
        <form action="index.php" method="post" autocomplete="off">
            <h3 id="centrado">Formulario de Calculo</h3>
            <table>
                <tr>
                    <td>Empleado</td>
                    <td><input class="empleado" type="text" name="txtEmpleado" size="40"></td>
                </tr>
                <tr>
                    <td>Horas Trabajadas</td>
                    <td><input class="horas" type="text" name="txtHoras" size="40"></td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>
                        <select name="selCategoria" class="selCategorias">
                            <option value="">-- Elija una Categoria--</option>
                            <option value="Jefe">Jefe</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Operario">Operario</option>
                            <option value="Practicante">Practicante</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn_procesesar">Procesar</button>
                        <button type="reset" class="btn_limpiar">Limpiar</button>
                        <a href="index.php" class="btn_nuevo">Nueva Consulta</a>
                    </td>
                </tr>
                <?php
                    error_reporting(0);

                    // capturando datos
                    $empleado = $_POST['txtEmpleado'];
                    $hora = $_POST['txtHoras'];
                    $categoria = $_POST['selCategoria'];

                    // realizar los calculos
                    if($categoria == "Jefe") $pagoHora = 50;
                    if($categoria == "Administrativo") $pagoHora = 30;
                    if($categoria == "Operario") $pagoHora = 15;
                    if($categoria == "Practicante") $pagoHora = 5;

                    $sBruto = $hora * $pagoHora;
                    $descuento = $sBruto * (15/100);
                    $sNeto = $sBruto - $descuento;
                ?>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>Empleado</td>
                    <td><?php echo $empleado; ?></td>
                </tr>
                <tr>
                    <td>Salario Bruto</td>
                    <td><?php echo "$". number_format($sBruto, 2, '.', ','); ?></td>
                </tr>
                <tr>
                    <td>Descuento</td>
                    <td><?php echo "$". number_format($descuento, 2, '.', ','); ?></td>
                </tr>
                <tr>
                    <td>Salario Neto</td>
                    <td class="sNeto"><?php echo "$". number_format($sNeto, 2, '.', ','); ?></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6 id="centrado"> Todos los Derechos Reservados Rixler Corp  <?php echo date('Y')?></h6>
    </footer>
</body>
</html>