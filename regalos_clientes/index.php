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
        <form action="index.php" method="post">
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
                        <button class="btn_consulta" type="submit">Nueva Consulta</button>
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
                if($tiket < 1 && $tiket  > 20){
                   echo '<script> alert("Ticket No Valido"); </script>';
                }
                ?>
            </table>
        </form>
    </section>
</body>
</html>