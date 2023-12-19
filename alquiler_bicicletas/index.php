<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquiler de Bicicletas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
    <header>
        <h1 id="centrado">Alquiler de Bicicletas</h1>
    </header>

    <section>
        <table id="tabla">
            <form action="index.php" method="post">
                <tr>
                    <td width="200">Nombre Usuario</td>
                    <td>
                        <input type="text" name="txtNombre" size="40">
                    </td>
                </tr>

                <tr>
                    <td width="200">Prenda Usuario</td>
                    <td>
                        <input type="text" name="txtPrenda" size="40">
                    </td>
                </tr>

                <tr>
                    <td width="200">Horas de Alquiler</td>
                    <td>
                        <input type="text" name="txtHoras" size="40">
                    </td>
                </tr>

                <tr>
                    <td width="200"></td>
                    <td>
                        <input type="submit" value="Calcular">
                    </td>
                    <td>
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>

                <!-- código php -->

            </form>
        </table>
    </section>

</body>
</html>