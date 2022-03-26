<?php

include("conexion.php");

// tomar la info tomada por el front-end
$id_cliente =$_REQUEST['id_cliente'];
$nombre =$_REQUEST['nombre'];
$telefono =$_REQUEST['telefono'];
$pais =$_REQUEST['pais'];

//verificar que el correo no se repita
// query = consultar 
$result=mysqli_query($cnn, "SELECT nombre FROM cliente WHERE nombre = '$nombre'");
if (mysqli_num_rows($result)==0){
    // si no lo encontro por el email se agregara
    mysqli_query($cnn,"INSERT INTO cliente VALUES('$id_cliente','$nombre','$telefono','$pais')");
    echo " el cliente se ha guadado correctamente";
}
else{
    echo " el usuario ya existe";
}
?>