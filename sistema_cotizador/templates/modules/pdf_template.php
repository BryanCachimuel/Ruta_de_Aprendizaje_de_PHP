<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotización</title>
    <style>
        *{
            font-family: Verdana, Arial, sans-serif;
        }
        table{
            font-size: x-small;
        }
        tfoot tr td{
            font-weight: bold;
            font-size: x-small;
        }
        .gray{
            background-color: lightgray;
        }
        .success{
            color: green;
        }
    </style>
</head>
<body>
    <!-- Cabecera -->
     <table width="100%">
        <tr>
            <td valign="top"><img src="<?php echo 'assets/img/logo.png'?>" alt="" width="150"></td>
            <td align="right">
                <h3><?php echo APP_NAME; ?></h3>
                <pre>
                    Jhon Doe CEO
                    Joystick
                    XX101010101
                    512 3465 78
                    FAX
                </pre>
            </td>
        </tr>
     </table>

    <!-- Información de la empresa -->
    <table width="100%">
       <tr>
        <td><strong>De:</strong> Jhon Doe - Joystick</td>
        <td><strong>Para:</strong> Cliente - Empresa (email@empresa.com)</td>
       </tr> 
    </table>

    <br/>

    <!-- Resumen de la cotización -->
    <table width="100%">
        <thead style="background-color: lightgrey;">
            <tr>
                <th>#</th>
                <th>Descripción</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Playstation IV - Black</td>
                <td align="right">$1400.00</td>
                <td align="center">1</td>
                <td align="right">$1400.00</td>
            </tr>
            <tr>
                <th scope="1"></th>
                <td>Metal Gear Solid - Phantom</td>
                <td align="right">$105.00</td>
                <td align="center">1</td>
                <td align="right">$105.00</td>
            </tr>
            <tr>
                <th>Final Fantasy XV - Game</th>
                <td align="right">$130.00</td>
                <td align="center">1</td>
                <td align="right">$130.00</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"></td>
                <td align="right">Subtotal $</td>
                <td align="right">1635.00</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td align="right">Impuesto $</td>
                <td align="right">294.3</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td align="right">Envío $</td>
                <td align="right">294.3</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td align="right">Total $</td>
                <td align="right" class="gray"><h3 style="margin: 0px 0px;">1929.3</h3></td>
            </tr>
            <tr>
                <td colspan="5" align="right">Todos los impuestos incluidos</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>