<?php

if(!empty($_POST["guardar"])){
    if (empty($_POST["nombre_usuario"]) and empty($_POST["contraseña"]) and empty($_POST["contraseña2"])){
        echo "<div class = 'alert alert-danger text-center'>Los campos estan vacios</div>";
    } else{

        //$nombre = $_POST["nombre"];

        $usuario_nuevo = $_POST["nombre_usuario"];
        
        $contraseña = $_POST["contraseña"];
        
        // $contraseña2 = $_POST["contraseña2"];

        $sql = $connect->query("SELECT * FROM usuarios WHERE  usuario = '$usuario_nuevo' && contraseña = '$contraseña' ");
        if ($datos = $sql->fetch_object()){
            header("Location:index.php");
        } else {
            echo "<div class = 'alert alert-warning text-center'>ACCESO DENEGADO</div>";
        }
    }
}

?>
 <!-- include "conexion.php";
if($_POST){
$btn = $_POST["guardar"];



$sql = $connect->query("insert into usuarios(nombre, usuario, contraseña) values ('$nombre','$usuario_nuevo', '$contrasena')"); 

if($sql){
    echo "Registro Exitoso";
}else {
    echo "error";
}
} -->