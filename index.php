<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body><center>
    <form action = "registro.php" method = "POST">

    <!-- Ingresa los datos -->
     <h1>INICIAR SESIÓN:</h1>
     <p><label for="nombre">NOMBRE: </label>
        <input type = "texto" name= "nombre"></p>

        <p><label for="contraseña">CONTRASEÑA:</label>
        <input type = "texto" name= "contraseña"></p>

        <?php

    //Si el usuario no es administrador/cliente o la contraseña correcta
    if(isset($_GET['error'])){
        $incorrecto = $_GET['error'];
        if($incorrecto == "error"){
            echo "USUARIO O CONTRASEÑA ERRÓNEA, INTENTE NUEVAMENTE";
        }elseif($incorrecto == "campovacio"){
            echo "POR FAVOR, LLENE LOS CAMPOS";
        }
    }
?>
        <p><input type = "submit" value = "Acceder"></p>
        
</body></center>

</html>