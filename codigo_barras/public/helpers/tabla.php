<?php
    require_once("C://xampp/htdocs/Ejercicios_PHP/codigo_barras/database/conexion.php");
    $conectar = conexion();
    $sql = "SELECT * FROM medicamentos";
    $resultado = mysqli_query($conectar,$sql);
    $arraycodigos = array();
?>



<table class="table table-info table-striped" border="1">
    <tr style="font-weight: bold; font-size: 20px;">
        <td>Nombre del Farmaco</td>
        <td>Código de Barras</td>
    </tr>
    <?php while($datos=mysqli_fetch_row($resultado)) : 
          $arraycodigos[] = (string)$datos[2];    
    ?>
        <tr>
            <td><?php echo $datos[1]; ?></td>
            <td>
                <!--<?php echo "barcode".$datos[2];?></svg>-->
                <svg id='<?php echo "barcode".$datos[2];?>'></svg>
            </td>
        </tr>
    <?php endwhile;  ?>
</table>

<script type="text/javascript">
    function arrayjsonbarcode(j){
        json = JSON.parse(j);
        arr = [];
        for(let x in json){
            arr.push(json[x]);
        }
        return arr;
    }

    jsonvalor = '<?php echo json_encode($arraycodigos) ?>';
    valores = arrayjsonbarcode(jsonvalor);

    for(let i = 0; i < valores.length; i++){
        JsBarcode("#barcode" + valores[i], valores[i].toString(),{
            format: "codobar",
            lineColor: "#000",
            width: 2,
            height: 30,
            displayValue: true
        });
    }
</script>

