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
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td width="200">Comprador</td>
                    <td>
                        <input type="text" name="txtComprador" size="50">
                    </td>
                    <td width="200"></td>
                </tr>

                <tr>
                    <td>Fecha Actual</td>
                    <td>
                        <input type="text" name="txtFecha" readonly size="10" value="<?php echo date('d/m/y'); ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>Nro de Entradas Adultos</td>
                    <td>
                        <input type="text" name="txtNroEntradasAdultos" size="50">
                    </td>
                    <td width="200"></td>
                </tr>

                <tr>
                    <td>Nro de Entradas Niños</td>
                    <td>
                        <input type="text" name="txtNroEntradasNinios" size="50">
                    </td>
                    <td width="200"></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btnAdquirir" value="Adquirir">
                    </td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>