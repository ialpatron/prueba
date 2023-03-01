<?php

$cadena2 = '<h1>hello world</h1>'; 
$cadena = "Esta es la cadena."; //puedes recibirla por POST o lo que quieras
$color = "#FF0000"; //lo mismo que antes
echo "<p><font color='".$color."'>".$cadena. $cadena2."</font></p>";
echo "<h2>Leonardo</h2>";
echo "hola<br>";
//Conexion de base de Datos//
/*
$conex = mysqli_connect("localhost","root","","holamundo");
if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";*/
  //  Otra Forma //

  $servidor="localhost";
$username="root";
$contrasenia="";

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=holamundo", $username, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion Establecida";
}catch(PDOException $error){
    echo " Conexion Erronea".$error ; 
} 
?>


