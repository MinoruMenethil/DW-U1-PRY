<?php
session_start();

if($_SESSION['id'] =!null){
    session_destroy();
    header("location:index.php");
}else{
    //Control para que no ingresen directamente a esta pagina
    header("location:index.php");
}
?>