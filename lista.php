<?php

session_start();

$total = 0.00;

echo "<H1><b><center> LISTA DE ARTÍCULOS </H1></b></center><br>"; 
if(isset($_SESSION["lista"])){
    $miLista=$_SESSION['lista'];
    foreach($_SESSION["lista"] as $indice => $tabla){
        echo "<center><hr>Producto: " . $indice . "<br></center>";
    $total += $tabla["cantidad"] * $tabla["precio"];

        foreach($tabla as $key => $value){
            echo $key .": " . $value . "<br>";
        }
    }
    
    echo "<br><center><b>Total: $ $total.00</b></center><br>";
    ?>
    <a href="tienda.php"><img src="pagina/regreso.png" width = "50px;"></a>
    <?php
    echo "<br> <br>"
    ?>
    <a href="lista.php?limpiar=true"><img src="pagina/eliminar.png" width = "50px;"></a>
    <?php
}else{
    echo "<script>alert('NO SE HA AGREGADO NADA A LA LISTA');</script>";
    ?>
    <a href="tienda.php">Regresar</a>
    <?php
}

if(isset($_REQUEST["limpiar"])){
    session_destroy();
}
?>
