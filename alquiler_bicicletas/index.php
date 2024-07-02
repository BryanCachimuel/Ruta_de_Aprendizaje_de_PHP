<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiler de Bicicletas</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <header>
        <h1 id="centrado">Alquiler de Bicicletas</h1>
    </header>

    <section>
        <table id="tabla">
            <form action="index.php" method="post" autocomplete="off">
                <tr>
                    <td width="200"><i class="fa-regular fa-circle-user"></i> Nombre Usuario: </td>
                    <td>
                        <input type="text" class="nombre" name="txtNombre" size="40">
                    </td>
                </tr>

                <tr>
                    <td width="200"><i class="fa-solid fa-hand-holding-dollar"></i> Prenda Usuario: </td>
                    <td>
                        <input type="text" class="prenda" name="txtPrenda" size="40">
                    </td>
                </tr>

                <tr>
                    <td width="200"><i class="fa-regular fa-clock"></i> Horas de Alquiler: </td>
                    <td>
                        <input type="text" class="horas" name="txtHoras" size="40">
                    </td>
                </tr>

                <tr>
                    <td width="200"><i class="fa-regular fa-money-bill-1"></i> Valor de Alquiler: </td>
                    <td>
                        <input type="text" class="valor" name="txtValor" size="40">
                    </td>
                </tr>

                <tr>
                    <td width="200"></td>
                    <td>
                        <button type="submit" id="btn_procesar"> Procesar </button>
                        <button type="reset" id="btn_limpiar">Limpiar</button>
                        <a href="index.php" id="consulta">Consultar</a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>

                <!-- código php -->
                <?php

                    error_reporting(0);

                    $nombre = $_POST['txtNombre'];
                    $prenda = $_POST['txtPrenda'];
                    $horas = $_POST['txtHoras'];
                    $valor = $_POST['txtValor'];

                    // realizar los calculos
                    $valorBruto = $horas * $valor;
                    $iva = ((12 * $valorBruto)/100);
                    $fmtIva = round($iva,2);
                    $valorTotal = $valorBruto + $fmtIva;
                    $vTotalT = number_format($valorTotal, 2)
                ?>
            </form>
        </table>

        
        <table id="impresion">
                <tr>
                    <td>Nombre Usuario: </td>
                    <td><?php echo $nombre; ?></td>
                </tr>

                <tr align="center">
                    <td>Prenda Usuario: </td>
                    <td><?php echo $prenda; ?></td>
                </tr>

                <tr align="center">
                    <td>Horas de Uso: </td>
                    <td><?php echo $horas; ?></td>
                </tr>

                <tr align="center">
                    <td>Valor por Hora: </td>
                    <td><?php echo $valor; ?></td>
                </tr>

                <tr align="center">
                    <td>I.V.A: </td>
                    <td><?php echo $iva; ?></td>
                </tr>

                <tr align="center" id="vTotalT">
                    <td>Valor Total: </td>
                    <td><?php echo "$ ". $vTotalT; ?></td>
                </tr>
        </table>
    </section>

</body>
</html>