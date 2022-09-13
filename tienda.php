<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="bootstrap/js/booststrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>TIENDA</title>
    <link type="text/css" rel="stylesheet" href="margen-border.css"/>
</head>

<body>
    <div align="center">
        <H1>Bienvenidos a Manu Shope</H1>

        <table class="table table-white" style="width: 600px;">
        <thead>
            <th>PRODUCTO</th>
            <th>PRECIO</th>
            <th>DESCRIPCION</th>
            <th>CANTIDAD</th>
        </thead>

        <tbody>
            <tr style="width: 600px;">

                <td style="width: 100px;">
                    <img src="pagina/iphone.jpg" width="150px" height="150px">
                </td>

                <td style="width: 300px;">
                <center>$19,200.00</center>
                </td>

                <td style="width: 200px;">
                </p> <align>El iPhone 12 tiene una espectacular pantalla Super Retina XDR de 6.1 pulgadas . Un frente de Ceramic Shield, cuatro veces más resistente a las caídas . Modo Noche en todas las cámaras, para que puedas tomar fotos increíbles con poca luz. Grabación, edición y reproducción de video en Dolby Vision con calidad cinematográfica. Y el potente chip A14 Bionic</align><p>
                </td>
                

                <td style="width: 150px;">
                <form action="tienda.php" method="POST">
                    <input type="hidden" name="textoProducto" value="iPhone 12">
                    <center><input type="number" name="cantidad" value="1" style=width:50px;></center>
                    <input type="hidden" name="textoPrecio" value="19200.00">
                    <center> <input type="submit" name="btnAgregar" value="Agregar"></center>
                </form>
                </td>

                <tr style="width: 600px;">

                <td style="width: 100px;">
                    <img src="pagina/Motorolaedge20.jpg" width="150px" height="150px">
                </td>

                <td style="width: 300px;">
                <center>$11,400.00</center>
                </td>

                <td style="width: 200px;">
                </p><align>Nuestro teléfono más fino 5G tiene grandes funcionalidades, no tamaño. Captura fotos increíbles desde cualquier ángulo con un sistema de cámaras de 108 MP y un Super Zoom de 30 aumentos. Disfruta de una pantalla OLED ultravibrante y ultrasuave de 144 Hz. Y experimenta un rendimiento increíble con un procesador Qualcomm Snapdragon y velocidades 5G de siguiente generación. Características 108 MP + Super Zoom de 30 aumentos.</align><p>
                </td>


                <td style="width: 150px;">
                <form action="tienda.php" method="POST">
                    <input type="hidden" name="textoProducto" value="Motorola Edge 20">
                    <center><input type="number" name="cantidad" value="1" style=width:50px;></center>
                    <input type="hidden" name="textoPrecio" value="11400.00">
                    <center> <input type="submit" name="btnAgregar" value="Agregar"></center>
                </form>
                </td>
            </tr>

            <tr style="width: 600px;">

                <td style="width: 100px;">
                    <img src="pagina/PADpro.jpg" width="150px" height="150px">
                </td>

                <td style="width: 300px;">
                <center>$22,000.00</center>
                </td>

                <td style="width: 200px;">
                </p><align>Este producto combina la potencia y la capacidad de una computadora con la versatilidad y facilidad de uso que solo un iPad puede brindar. Realizar varias tareas a la vez, como editar documentos mientras buscás información en internet o sacarte una selfie, es sumamente sencillo.</align><p> 
                </td>
                <br/>


                <td style="width: 150px;">
                <form action="tienda.php" method="POST">
                    <input type="hidden" name="textoProducto" value="Ipad Pro ">
                    <center><input type="number" name="cantidad" value="1" style=width:50px;></center>
                    <input type="hidden" name="textoPrecio" value="22000.00">
                    <center> <input type="submit" name="btnAgregar" value="Agregar"></center>
                </form>
                </td>
            

                <tr style="width: 600px;">

                <td style="width: 100px;">
                    <img src="pagina/Samsung.jpg" width="150px" height="150px">
                </td>

                <td style="width: 300px;">
                <center>$19,000</center>
                </td>

                <td style="width: 900px;">
                </p><align>Descubre el Galaxy S20 Ultra. Con la revolucionaria grabación de vídeo en calidad 8K que cambia la forma de grabar, no solo el vídeo, sino también la fotografía y el 5G cambiaran la forma de compartir contenidos. Además, Samsung Knox, una batería inteligente, un procesador más potente y un gran almacenamiento convierten la serie Galaxy S20 en un mundo completamente nuevo para los dispositivos móviles.</align><p> 
                </td>
          


                <td style="width: 150px;">
                <form action="tienda.php" method="POST">
                    <input type="hidden" name="textoProducto" value="Galaxy S20 Ultra">
                    <center><input type="number" name="cantidad" value="1" style=width:50px;></center>
                    <input type="hidden" name="textoPrecio" value="19000.00">
                    <center> <input type="submit" name="btnAgregar" value="Agregar"></center>
                </form>
                </td>
        </tbody>
    </div>

    <?php
        if(isset($_REQUEST["btnAgregar"])){
            $producto = $_REQUEST["textoProducto"];
            $cantidad = $_REQUEST["cantidad"];
            $precio = $_REQUEST["textoPrecio"];

            $_SESSION["lista"][$producto]["cantidad"] = $cantidad;
            $_SESSION["lista"][$producto]["precio"] = $precio;

            echo "<script>alert('El producto $producto se ha agregado a la lista');</script>";

        }
    ?>

</body>

</html>

<a href="lista.php"><img src="pagina/lista.png" width = "30px;"></a></left>