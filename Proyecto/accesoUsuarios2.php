<?php
//recibir los datos desde el formulario
$user2 = $_POST['username2'];
$pass2 = $_POST['password2'];

if(isset($user2)){
    //conexion con base de datos
    require_once 'conexion.php';

    //Iniciar la sesion
    session_start();

    //consultar si los datos son los que estan en la base
    $consulta2 = "SELECT id_cli, nom_cli FROM usuario WHERE username_log2 = '$user2' AND password_log2 = '$pass2'";

    //Ejecucion de la consulta
    $resultado2 = mysqli_query($conn, $consulta2) or die (mysqli_connect_error());

    //almacenar los datos en un arreglo
    $fila2 = mysqli_fetch_array($resultado2);

    if($fila2['id_cli'] == null){
        //redirigir al formulario de login
        header("location:index.php");
    }else{
        //definimos las variables de sesion y rediigir a la pagina de usuario
        $_SESSION['id'] = $fila2['id_cli'];
        $_SESSION['nombre'] = $fila2['nombre_log2'];
        header("location:usuarios.php");
    }
}else{
    header("location:index.php");
}
?>