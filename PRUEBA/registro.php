
<?php
include "conexion.php";


    $nombre = $_POST["nombre"];

    $usuario_nuevo = $_POST["nombre_usuario"];
    
    $contraseña = $_POST["contraseña"];

    $query = "INSERT INTO usuarios (nombre, usuario, contraseña) 
              VALUES ('$nombre', '$usuario_nuevo', '$contraseña')";
    $ejecutar = mysqli_query($connect, $query);


