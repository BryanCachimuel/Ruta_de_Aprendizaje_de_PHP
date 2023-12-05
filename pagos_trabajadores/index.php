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
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>Empleado</td>
                    <td><input type="text" name="txtEmpleado" size="40"></td>
                </tr>
                <tr>
                    <td>Horas Trabajadas</td>
                    <td><input type="text" name="txtHoras" size="40"></td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>
                        <select name="selCategoria">
                            <option value="">-- Elija una Categoria--</option>
                            <option value="Jefe">Jefe</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Operario">Operario</option>
                            <option value="Practicante">Practicante</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>