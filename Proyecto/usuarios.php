<?php
require_once 'conexion.php';
$consulta = "SELECT * FROM usuario";
$result = $conn -> query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="./css/bulma.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"
        integrity="sha256-FEqEelWI3WouFOo2VWP/uJfs1y8KJ++FLh2Lbqc8SJk=" crossorigin="anonymous"></script>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,td{
            padding: 5px;
            text-align: left;
        }
        .img{
            width: 100px;
            height: 100px;
        }
    </style>
    <script tupe="text/javascript">
        function confirmardelete(){
            var respuesta= confirm ("Estas seguro que desea eliminar al usuario?");
            if( respuesta==true){
                return true;
            }else{
                return false;
            }
        }

    </script>
</head>
<body>
    <div>
        <h3>Usuarios</h3>
        <button type="button" class="btn-group btn-group-toggle"><h4><a href="agregar.php">Agregar Usuario</a></h4></button>
        
        <table class="table table-striped table-dark">
        <br>
            <thead>
                <br>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Correo</th>
                    <th scope="col">direccion</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){ 
                        echo '<tr>';
                        echo '<td>' . $row['id_cli'] . '</td>';
                        echo '<td>' . $row['nom_cli'] . " " . $row['ape_cli'] . '</td>';
                        echo '<td>' . $row['ced_cli'] . '</td>';
                        echo '<td>' . $row['email_cli'] . '</td>';
                        echo '<td>' . $row['dire_cli'] . '</td>';
                        echo '<td class=img>' . $row['foto'] . '</td>';
                        echo'<td>';
                        echo '<a href="leer.php? id=' . $row['id_cli'] . '"><button type="button"  class="btn btn-outline-primary"> Leer</button></a>';
                        echo '<a href="actualizar.php? id=' . $row['id_cli'] . '"><button type="button" class="btn btn-outline-success"> Actualizar</button></a>';
                        echo '<a href="eliminar.php? id=' . $row['id_cli'] . '"><button type="button" class="btn btn-outline-warning"" onclick="return confirmardelete()" > Eliminar </button></a>';
                     }
                        
                    
                    $result -> free();
                }else{
                    echo '<p><em>No existen datos registrados</em></p>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>