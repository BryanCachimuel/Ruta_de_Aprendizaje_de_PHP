<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entradas para el estadio</title>
    <link rel="stylesheet" href="publico/css/estilos.css">
</head>
<body>
    <section>
        <form action="index.php" method="POST" autocomplete="off">
            <table>
                <h4>Formulario de Compra de Entradas</h4>
                
                <tr>
                    <td width="200">Comprador</td>
                    <td>
                        <input type="text" name="txtComprador" class="comprador">
                    </td>
                    <td width="200" id="error"></td>
                </tr>

                <tr>
                    <td>Fecha Actual</td>
                    <td>
                        <input type="text" name="txtFecha" class="fecha" readonly value="<?php echo date('d/m/y'); ?>">
                    </td>
                </tr>

                <tr>
                    <td>Nro de Entradas para Adultos</td>
                    <td>
                        <input type="text" name="txtNroEntradasAdultos" class="adultos">
                    </td>
                    <td width="200" id="error"></td>
                </tr>

                <tr>
                    <td>Nro de Entradas para Niños</td>
                    <td>
                        <input type="text" name="txtNroEntradasNinios" class="ninios">
                    </td>
                    <td width="200" id="error"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <button class="boton" type="submit" name="btnAdquirir">Comprar Entradas</button>
                        <button class="limpiar" type="reset">Limpiar</button>
                        <a href="index.php" class="nuevaCompra">Nueva Compra</a>
                    </td>
                </tr>

            </table>
        </form>
    </section>
</body>
</html>