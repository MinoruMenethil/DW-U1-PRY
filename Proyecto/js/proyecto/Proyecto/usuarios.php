<?php
require_once 'conexion.php';
$consulta = "SELECT * FROM usuario";
$result = $conn -> query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./inc/head.php"; ?>
    <?php  include "./inc/navbar.php"; ?>
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
        .table thead, .table tfoot{
            background-color: yellow;
        }
        .table thead th, .table tfoot th{
            color: purple;
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
        <center><h3>Lista de Usuarios</h3></center>
        <button type="button" class="button is-success is-outlined"><h4><a href="agregar.php">Agregar Usuario</a></h4></button>
        
        <table  class="table  is-striped  is-hoverable">
        <br>
            <thead>
                <br>
                <tr>
                   
                    <th scope="col">Nombre</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Correo</th>
                    <th scope="col">direccion</th>
                    <th scope="col">Foto</th>
                    <th scope="col">CRUD</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){ 
                        echo '<tr>';
            
                        echo '<td>' . $row['nom_cli'] . " " . $row['ape_cli'] . '</td>';
                        echo '<td>' . $row['ced_cli'] . '</td>';
                        echo '<td>' . $row['email_cli'] . '</td>';
                        echo '<td>' . $row['dire_cli'] . '</td>';
                        echo '<td class=img>' . $row['foto_cli'] . '</td>';
                        echo'<td>';
                        echo '<a href="leer.php? id=' . $row['id_cli'] . '"><button type="button"  class="button is-primary"> Leer</button></a>';
                        echo '<a href="actualizar.php? id=' . $row['id_cli'] . '"><button type="button" class="button is-success"> Actualizar</button></a>';
                        echo '<a href="eliminar.php? id=' . $row['id_cli'] . '"><button type="button" class="button is-danger is-light"" onclick="return confirmardelete()" > Eliminar </button></a>';
                     }
                        
                    
                    $result -> free();
                }else{
                    echo '<p><em>No existen datos registrados</em></p>';
                }
                ?>
            </tbody>
        </table>
    <div id="nuevo_usuario" class="modal fade" tabindex="-1" role="dialog" aria-lablelld
    </div>
    <script>
        $(documento).ready(function(){
            $('#example').TablaPr();
        });
    </script>
</body>
</html>