<?php
    require_once 'conexion.php';

    
if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    $query='SELECT * FROM usuario WHERE id_cli = ?';
    if($stmt = $conexion -> prepare($query)){
        $stmt -> bind_param('i', $_GET['id']);
        if($stmt -> execute()){
            $result = $stmt -> get_result();
            if($result -> num_rows == 1){
                $row = $result -> fetch_array(MYSQLI_ASSOC);
                $nombre = $row['nom_cli'];
                $apellido = $row['ape_cli'];
                $cedula = $row['ced_cli'];
                $email = $row['email_cli'];
                $edad = $row['edad_cli'];
                $telefono = $row['tlf_cli'];
                $direccion = $row['dire_cli'];
            }else {
                echo 'Error! No existen resultados';
                exit();
            }
        }else {
            echo 'Error! revise conexion con la base de datos';
            exit();
        }
    }
    $stmt -> close();
    $conexion -> close();
}else {
    echo 'Error! intente mas tarde';
    exit();
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Usuario</title>
    <style>
        label{
            font-weight: bold;
        }
    </style>
    <?php 
    include "./inc/head.php";
    ?>
</head>
<body>
    <table class="table is-bordered is-striped is-fullwidth" >
 
        <tr class="th is-selected">
        
            <th><label>Nombre</label>
            <p><?php echo $nombre ." ". $apellido ?></p></th>
        
            <th><label>Edad</label>
            <p><?php echo $edad ?></p></th>
        
            <th><label>tlf</label>
            <p><?php echo $telefono?></p></th>
        
            <th><label>direccion</label>
            <p><?php echo $direccion ?></p></th>
        
            <th><label>Email</label>
            <p><?php echo $email ?></p></th>
        
            <th><label>Cedula</label>
            <p><?php echo $cedula ?></p></th>
        </tr>
    </table>
    </div>
        <button type="button" class="btn btn-primary"><p><a href="index.php">Atras</a></p></button>
    </div>
</body>
</html>