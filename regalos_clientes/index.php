<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regalo Clientes</title>
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
    <header>
        <h3 class="titulo">Regalo Clientes</h3>
    </header>

    <section>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>Nombre del Cliente: </td>
                    <td>
                        <input class="input_datos" type="text" name="txtnombre" placeholder="Ingrese el nombre del cliente" value="<?php echo $_POST['txtNombre'] ?>">
                    </td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>