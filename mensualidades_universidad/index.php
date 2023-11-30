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
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>Nombre del Estudiantes: </td>
                    <td>
                        <input type="text" name="txtEstudiante">
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td>Seleccione la Categoría: </td>
                    <td>
                        <select name="selCategoria" SELECTED>
                            <option value="Seleccione">Seleccione Categoría</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td>Ingrese Promedio Bimestral: </td>
                    <td>
                        <input type="text" name="txtPromedio">
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btnEnviar" value="Procesar">
                    </td>
                </tr>

                <tr>
                    <td>Monto Mensualidad</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Monto Descuento</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Monto a Cancelar</td>
                    <td></td>
                </tr>

            </table>
        </form>
    </section>
</body>
</html>