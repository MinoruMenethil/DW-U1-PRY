<?php
//conexion a la base de datos
require_once 'conexion.php';

//Saber si se llama por post
if($_SERVER['REQUEST_METHOD']=='POST'){
    //Almacenar post en variables
    $nombre = $_POST['nom_cli'];
    $apellido = $_POST['ape_cli'];
    $edad = $_POST['edad_cli'];
    $telefono = $_POST['tlf_cli'];
    $direccion = $_POST['dire_cli'];
    $email = $_POST['email_cli'];
    $cedula = $_POST['ced_cli'];

    //Verificar si se estan enviando todos los datos
    if(isset($nombre) && !empty(trim($nombre)) && isset($apellido) && !empty(trim($apellido)) 
    &&  isset($edad) && !empty(trim($edad))&& isset($telefono) && !empty(trim($telefono)) 
    && isset($direccion) && !empty(trim($direccion)) && isset($email) && !empty(trim($email)) 
    && isset($cedula) && !empty(trim($cedula))){
        //Generar la consulta
        $consulta = "INSERT INTO usuario (nom_cli, ape_cli, edad_cli, tlf_cli, dire_cli, email_cli, ced_cli) VALUES (?, ?, ?, ?, ?, ?,?)";
        //preparar la insercion
        if($stmt = $conn -> prepare($consulta)){
            $stmt -> bind_param('sssssss', $nombre, $apellido, $edad, $telefono, $direccion, $email, $cedula);
            //Validar si se ejecuta el stmt
            if($stmt -> execute()){
                header("location: index.php");
                exit();
            }else{
                echo "Error! Por favor intente mas tarde";
            }
            $stmt -> close();
        }
    }
    $conn -> close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo usuario</title>
    
    <?php 
    include "./inc/head.php";
    ?>
    <?php  include "./inc/navbar.php"; ?>
</head>
<body>
    <h2>Agregar un Usuario</h2><br>
    <h3>Llene este formulario para agregar un usuario al sistema</h3><br>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        
        <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" name="nom_cli" type="text" placeholder="Nombre" require>
                </div>
        </div>

        <div class="field">
                <label class="label">Apellido</label>
                <div class="control">
                <input class="input" name="ape_cli" type="text" placeholder="Apellido" require>
                </div>
        </div>

        <div class="field">
                <label class="label">Edad</label>
                <div class="control">
                <input class="input" name="edad_cli" type="text" placeholder="Apellido" require>
                </div>
        </div>
        <div class="field is-horizontal">
            <label class="label">Telefono</label>
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field is-expanded">
                    <div class="field has-addons">
                        <p class="control">
                        <a class="button is-static">
                            +593
                        </a>
                        </p>
                        <p class="control is-expanded">
                        <input class="input" type="tel"  name="tlf_cli" placeholder="Escriba su numero de tlf">
                        </p>
                    </div>
                    <p class="help">No agrege el numero cero al inicio</p>
                    </div>
                </div>
        </div>

        <div class="field">
                <label class="label">Direccion</label>
                <div class="control">
                <input class="input" name="dire_cli" type="text" placeholder="Direccion" require>
                </div>
        </div>

        <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-danger" name="email_cli" type="email" placeholder="Email input" value="@gmail" require>
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle"></i>
                </span>
            </div>
            <p class="help is-danger">This email is invalid</p>
            </div>
            <div class="field is-grouped">
        </div>    
        
        <div class="field">
                <label class="label">Cedula</label>
                <div class="control">
                    <input class="input" name="ced_cli" type="text" placeholder="Cedula" require>
                </div>
        </div>

        <div class="control">
            <div class="field is-grouped is-grouped-right">
                <p class="control">
                    <input class="button is-primary" type="submit" value="Agregar">
                </p>
                <p class="control">
                    <a class="button is-light" href="index.php">Cancelar
                    </a>
                </p>
            </div>
        </div>
    </form>
</div>
</body>
</html>