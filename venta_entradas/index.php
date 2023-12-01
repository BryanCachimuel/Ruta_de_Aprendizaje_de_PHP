<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de Entradas</title>
    <link rel="stylesheet" href="publico/css/estilos.css">
</head>
<body>
    <header>
        <h1 id="centrado">Ventas de Entradas</h1>
        <img src="publico/img/circo.jpg" alt="circo">
    </header>

    <section>

    <?php
        error_reporting(0);
        $comprador = $_POST['txtComprador'];
        $fecha = $_POST['txtFecha'];
        $numAdultos = $_POST['txtNroEntradasAdultos'];
        $numNinios = $_POST['txtNroEntradasNinios'];

        $mComprador = '';
        $mNumAdultos = '';
        $mNumNinios = '';

        if(isset($_POST['btnAdquirir'])){
            if(empty($comprador)) $mComprador = 'Debe Ingresar un nombre';
            elseif(is_numeric($comprador)) $mComprador = 'Solo se Permite Letras';
            else $mComprador = '';

            if(empty($numAdultos)) $mNumAdultos = 'Debe Ingresar la cantidad de adultos para la compra de entradas';
            elseif(!is_numeric($numAdultos)) $mNumAdultos = 'Solo se Permite Números';
           else $mNumAdultos = '';

            if(empty($numNinios)) $mNumNinios = 'Debe Ingresar la cantidad de niños para la compra de entradas';
            elseif(!is_numeric($numNinios)) $mNumNinios = 'Solo se Permite Números';
            else $mNumNinios = '';
        }

        /* Realizando los calculos */
        $dia = date('l');

        switch($dia){
            case 'Monday':
                $costosAdultos = 10;
                $costoNinios = 5;
                break;
            
            case 'Tuesday':
                $costosAdultos = 8;
                $costoNinios = 4;
                break;
            
            case 'Wednesday':
            case 'Thursday':
            case 'Friday':
                $costosAdultos = 16;
                $costoNinios = 8;
                break;

            case 'Saturday':
            case 'Sunday':
                $costosAdultos = 50;
                $costoNinios = 45;
                break;

            default:
                $costosAdultos = 0;
                $costoNinios = 0;
                break;
        }

        $adultos = $costosAdultos * $numAdultos;
        $ninios = $costoNinios * $numNinios;
    ?>

        <form action="index.php" method="post" autocomplete="off">
            <table id="formulario">
                <h4 id="titulo">Formulario de Compra</h4>
                <tr>
                    <td width="200">Comprador</td>
                    <td>
                        <input type="text" name="txtComprador" size="50">
                    </td>
                    <td width="200" id="error"><?php echo $mComprador; ?></td>
                </tr>

                <tr>
                    <td>Fecha Actual</td>
                    <td>
                        <input type="text" name="txtFecha" readonly size="10" value="<?php echo date('d/m/Y'); ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>Nro de Entradas Adultos</td>
                    <td>
                        <input type="text" name="txtNroEntradasAdultos" size="50">
                    </td>
                    <td width="200" id="error"><?php echo $mNumAdultos; ?></td>
                </tr>

                <tr>
                    <td>Nro de Entradas Niños</td>
                    <td>
                        <input type="text" name="txtNroEntradasNinios" size="50">
                    </td>
                    <td width="200" id="error"><?php echo $mNumNinios; ?></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input class="boton" type="submit" name="btnAdquirir" value="Adquirir">
                    </td>
                </tr>
            </table>


            <?php
                if(isset($_POST['btnAdquirir']) 
                    && empty($mComprador) 
                    && empty($mNumAdultos) 
                    && empty($mNumNinios)){
            ?>

            <table width="800" border="1">
                <tr>
                    <td>
                        <table width="800">
                            <h4 id="datos"> Datos de Compra</h4>
                            <tr>
                                <td width="150">Comprador</td>
                                <td width="350"><?php echo $comprador; ?></td>
                            </tr>
                            <tr>
                                <td>Costos por Adultos</td>
                                <td><?php echo "$". number_format($adultos,2, '.', ','); ?></td>
                            </tr>
                            <tr>
                                <td>Costos por Niños</td>
                                <td><?php echo "$". number_format($ninios, 2, '.', ','); ?></td>
                            </tr>
                            <tr>
                                <td>Día de Promoción</td>
                                <td><?php echo $dia; ?></td>
                            </tr>
                            <tr>
                                <td>Monto Total a Pagar</td>
                                <td><?php echo "$". number_format($adultos + $ninios, 2, '.', ','); ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <?php } ?>
            
        </form>
    </section>

    <footer>
        <h6 id="footer">Todos los Derechos Reservados -  Rixler Corp  - <?php echo date('Y')?></h6>
    </footer>
</body>
</html>