<?php
//recibir los datos desde el formulario
$user = $_POST['username'];
$pass = $_POST['password'];

if(isset($user)){
    //conexion con base de datos
    require_once 'conexion.php';

    //Iniciar la sesion
    session_start();

    //consultar si los datos son los que estan en la base
    $consulta = "SELECT id_log, nombre_log FROM login WHERE username_log = '$user' AND password_log = '$pass'";

    //Ejecucion de la consulta
    $resultado = mysqli_query($conn, $consulta) or die (mysqli_connect_error());

    //almacenar los datos en un arreglo
    $fila = mysqli_fetch_array($resultado);

    if($fila['id_log'] == null){
        //redirigir al formulario de login
        header("location:index.php");
    }else{
        //definimos las variables de sesion y rediigir a la pagina de usuario
        $_SESSION['id'] = $fila['id_log'];
        $_SESSION['nombre'] = $fila['nombre_log'];
        header("location:home.php");
    }
}else{
    header("location:index.php");
}
?>