<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regalo Clientes</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h3 class="titulo">Regalo Clientes</h3>
    </header>

    <?php 

    error_reporting(0);

    $nombre = $_POST['txtNombre'];
    $monto = $_POST['txtMonto'];
    $tiket = $_POST['txtTicket'];

    ?>

    <section>
        <form action="index.php" method="post" autocomplete="off">
            <table class="tabla">
                <tr>
                    <td>Nombre del Cliente: </td>
                    <td>
                        <input class="input_nombre" type="text" name="txtNombre" placeholder="Ingrese el nombre del cliente" value="<?php echo $_POST['txtNombre'] ?>">
                    </td>
                </tr>

                <tr>
                    <td>Monto Total: </td>
                    <td>
                        <input class="input_monto" type="text" name="txtMonto" placeholder="Ingrese monto a pagar" value="<?php echo $_POST['txtMonto'] ?>">
                    </td>
                </tr>

                <tr>
                    <td>Número de Ticket: </td>
                    <td>
                        <input class="input_ticket" type="text" name="txtTicket" placeholder="Ingrese número de tickey" value="<?php echo $tiket; ?>">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <button class="btn_procesar" type="submit">Procesar</button>
                        <button class="btn_limpiar" type="reset">Limpiar</button>
                        <a class="btn_consulta" href="index.php">Nueva Consulta</a>
                    </td>
                </tr>

                <?php 
                /* Obtieniendo regalos */
                if($tiket >= 1 && $tiket <= 4){
                    $regalo = 'Smart Watch Cobreloa 01A';
                    $descuento = ((20/100) * $monto);
                }
                if($tiket >= 5 && $tiket <= 9){
                    $regalo = 'Audifonos Hyunday 10L';
                    $descuento = ((17/100) * $monto);
                }
                if($tiket >= 10 && $tiket <= 14){
                    $regalo = 'Parlantes para PC Sony';
                    $descuento = ((15/100) * $monto);
                }
                if($tiket >= 15 && $tiket <= 20){
                    $regalo = 'Teclado RadioSchack Alambrico';
                    $descuento = ((12/100) * $monto);
                }
                if($tiket < 1 || $tiket  > 20){
                   echo '<script> alert("Ticket No Valido"); </script>';
                }

                $montoNuevo = $monto - $descuento;

                ?>

                <!-- Imprimir resultados -->
                <tr>
                    <td></td>
                    <td class="valores">Valores y Obsequio</td>
                </tr>
                <tr>
                    <td>Monto por Compra: </td>
                    <td>
                        <?php echo "$ ".$monto; ?>
                    </td>
                </tr>

                <tr>
                    <td>Descuento</td>
                    <td>
                        <?php echo "$ ".$descuento; ?>
                    </td>
                </tr>

                <tr>
                    <td>Monto a Cancelar: </td>
                    <td>
                        <?php echo "$ ". number_format($montoNuevo, 2,'.',',') ?>
                    </td>
                </tr>
                <tr>
                    <td>Regalo Obtenido: </td>
                    <td class="regalo">
                        <?php echo $regalo; ?>
                    </td>
                </tr>
            </table>
        </form>
    </section>

    <footer>
        <h5 class="derechos">Todos los Drechos Reservados © Rixler Corp <?php echo date('Y'); ?></h5>
    </footer>
</body>
</html>