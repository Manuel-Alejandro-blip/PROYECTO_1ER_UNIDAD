<?php 
$incorrecto; //variable de detección

/*verifica si el campo "nombre" y "contraseña" no se encuentran vacíos*/
if(!empty($_POST['nombre']) && !empty($_POST['contraseña'])){
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    /*verifica si el campo "nombre" es administrador ó cliente y "contraseña" 
    es nimda en administrador ó tneilc es en cliente, además, que incluye sus páginas correspondientes*/
    if($nombre == "administrador" && $contraseña == "asd"){
        $incorrecto = "OK";
        include('dashboard.php');
    } elseif($nombre == "cliente" && $contraseña == "123"){
        $incorrecto = "OK";
        include ('tienda.php');

        //en caso contrario, envía un error que es el mensaje cuando los campos son incorrectos
    } else{
        $incorrecto = "error";
        header("Location: index.php?error=$incorrecto");
    } //Ó se encuentran vacíos
}else{
    $incorrecto = "campovacio";
    header("Location: index.php?error=$incorrecto");   
}
?>
