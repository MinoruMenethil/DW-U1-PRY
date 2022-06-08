<?php

if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    require_once 'conexion.php';
    $consulta = "DELETE FROM usuario WHERE id_cli=?";
    if($stmt = $conn ->prepare($consulta)){
        $stmt -> bind_param('i', $_GET['id']);
        if($stmt -> execute()){
            header('location: index.php');
            exit();
        }else{
            echo "Error! Revise la conexion a la base de datos.";
            exit();
        }
    }
    $stmt -> close();
    $conn -> close();
}else{
    echo "Error! Por favor intente mas tarde.";
    exit();
}
?>