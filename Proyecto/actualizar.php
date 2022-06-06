<?php
//conexion
require_once 'conexion.php';
//leer los datos y poderlos visualizar en los cuadros de texto para su edicion
if(isset($_GET['id']) && !empty(trim($_GET["id"]))){
    $consulta = "SELECT * FROM usuario WHERE id_cli=?";
    if($stmt = $conn -> prepare($consulta)){
        $stmt -> bind_param('i', $_GET["id"]);
        if($stmt -> execute()){
            $result=$stmt->get_result();
            if($result->num_rows==1){
                $row=$result->fetch_array(MYSQLI_ASSOC);
                $nombre = $_POST['nom_cli'];
                $apellido = $_POST['ape_cli'];
                $edad = $_POST['edad_cli'];
                $telefono = $_POST['tlf_cli'];
                $direccion = $_POST['dire_cli'];
                $email = $_POST['email_cli'];
                $cedula = $_POST['ced_cli'];
            }else{
                echo 'Error! No existen resultados.';
                exit();
            }
        }
    }
    $stmt -> close();
}else{
    header("location: index.php");
    exit();
}

//tomar los datos editados y actualizarlos en la base
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
    <title>Actualizar usuario</title>
</head>
<body>
    <div>
        <h2>Actualizar el usuario</h2>
    </div>
    <h3>Edite la informacion para actualizar el usuario</h3>
    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">

            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input  name="nom_cli" type="text" placeholder="Nombre" value="<?php echo $nombre ?>" require>
                </div>
            </div>

            <div class="field">
                    <label class="label">Apellido</label>
                    <div class="control">
                    <input  name="ape_cli" type="text" placeholder="Apellido" value="<?php echo $apellido ?>" require>
                    </div>
            </div>
    
            <div class="field">
                    <label class="label">Edad</label>
                    <div class="control">
                    <input  name="edad_cli" type="text" placeholder="Edad" value="<?php echo $edad ?>" require>
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
                            <input  type="tel"  name="tlf_cli" placeholder="Escriba su numero de tlf" value="<?php echo $telefono ?>">
                            </p>
                        </div>
                        <p class="help">No agrege el numero cero al inicio</p>
                        </div>
                    </div>
            </div>

            <div class="field">
                    <label class="label">Direccion</label>
                    <div class="control">
                    <input  name="dire_cli" type="text" placeholder="Direccion"  value="<?php echo $direccion ?>" require>
                    </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger" name="email_cli" type="email" placeholder="Email input" value="@gmail" value="<?php echo $email  ?>" require>
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
                        <input type="text" name="ced_cli" type="text" placeholder="Cedula" value="<?php echo $cedula?>" require require>
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
</body>
</html>