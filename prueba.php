<?php

/*
$connStr = "host=localhost port=5432 dbname=apirest_i9u3_dev user=postgres password=123456";
//          host=localhost port=5432 dbname=apirest_i9u3_dev user=postgres password=12345

//simple check
$conn = pg_connect($connStr);
$result = pg_query($conn, "SELECT *FROM citas");
var_dump(pg_fetch_all($result));
*/
require_once 'clases/respuestas.class.php';
require_once 'clases/pacientes.class.php';

$_respuestas = new respuestas;
$_pacientes = new pacientes;
if($_SERVER['REQUEST_METHOD'] == "GET"){

        $pagina = $_GET["page"];
        $listaPacientes = $_pacientes->listaPacientes($pagina);
        /*
        header("Content-Type: application/json");
        $json = json_encode($listaPacientes);
        echo $json;
        http_response_code(200);   
    */    
}
?>

<table border="1">
        <td>id</td>
        <td>DNI</td>
        <td>NOMBRES</td>
        <td>DIRECCION</td>
        <td>TELEFONO</td>
        <td>FECHA NACIMIENTO</td>
    <?php
            while($consulta = pg_fetch_array($listaPacientes)){ 
    ?>
        <tr>
            <td><?php echo $consulta['pacienteid']."|" ?></td>
            <td><?php echo $consulta['dni'] ?></td>
            <td><?php echo $consulta['nombre'] ?></td>
            <td><?php echo $consulta['direccion'] ?></td>
            <td><?php echo $consulta['telefono'] ?></td>
            <td><?php echo $consulta['fechanacimiento'] ?></td>
            <br>
        </tr>
    <?php
       }       
    ?>
</table>