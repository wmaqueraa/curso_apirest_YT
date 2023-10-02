<?php
require_once 'clases/respuestas.class.php';
require_once 'clases/pacientes.class.php';

$_respuestas = new respuestas;
$_pacientes = new pacientes;
if($_SERVER['REQUEST_METHOD'] == "GET"){

        $listaPacientes = $_pacientes->tablaPacientes();
        $listaUsuarios = $_pacientes->tablaUsuarios();
}
?>
<table border="1">
        <td>ID</td>
        <td>DNI</td>
        <td>NOMBRES</td>
        <td>DIRECCION</td>
        <td>TELEFONO</td>
        <td>FECHA NACIMIENTO</td>
        <td>CORREO</td>
    <?php
            for ($i = 0; $i < count($listaPacientes); $i++) { 
    ?>
        <tr>
            <td><?php echo $listaPacientes[$i]['pacienteid'] ?></td>
            <td><?php echo $listaPacientes[$i]['dni'] ?></td>
            <td><?php echo $listaPacientes[$i]['nombre'] ?></td>
            <td><?php echo $listaPacientes[$i]['direccion'] ?></td>
            <td><?php echo $listaPacientes[$i]['telefono'] ?></td>
            <td><?php echo $listaPacientes[$i]['fechanacimiento'] ?></td>
            <td><?php echo $listaPacientes[$i]['correo'] ?></td>
            <br>
        </tr>
    <?php
       }       
    ?>
</table>

<table border="1">
        <td>ID</td>
        <td>USUARIO</td>
        <td>PÁSSWORD</td>
        <td>ESTADO</td>
    <?php
            for ($i = 0; $i < count($listaUsuarios); $i++) { 
    ?>
        <tr>
            <td><?php echo $listaUsuarios[$i]['usuarioid'] ?></td>
            <td><?php echo $listaUsuarios[$i]['usuario'] ?></td>
            <td><?php echo $listaUsuarios[$i]['password'] ?></td>
            <td><?php echo $listaUsuarios[$i]['estado'] ?></td>
            <br>
        </tr>
    <?php
       }       
    ?>
</table>