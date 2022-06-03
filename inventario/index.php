<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
    require_once("head.php");

    ?>
</head>
<body class="pagina_index">
    <div class="container-fluid">

        <div class="container">

            <div class="row">

                <div class="col-sm-8 col-sm-offset-3">
                    <h2 align="center">Sistema de Control de Inventario y Ventas del Grupo 6</h2>

                </div>

            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-3">

                    <form method="POST" action="">

                        <div class="form-group">
                            <label for="">Usuario</label>
                            <input type="text" name="usuario" class="form-control" placeholder="usuario">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control" placeholder="password">
                        </div>
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    
</body>
</html>