<?php
//parametros de conexión
$servername="localhost";
$username="ruben";
$password="Ruben181818.";
$dbname="formacion";

//crear conexión
$conn=new mysqli($servername,$username,$password,$dbname);
//comprobar conexión
if($conn->connect_error){
    //la conexión ha ido mal
    die("Connection failed: ".$conn->connect_error);
}

//echo "LA CONEXIÓN HA SIDO UN ÉXITO";