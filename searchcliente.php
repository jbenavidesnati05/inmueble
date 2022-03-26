<?php

include('conexion.php');


$id_cliente =$_REQUEST['id_cliente'];
//$passwd=$_REQUEST['passwd'];

$sql = "SELECT id_cliente, nombre, telefono, pais FROM cliente WHERE id_cliente= '$id_cliente'";

$res = mysqli_query($cnn,$sql);

if (mysqli_num_rows($res) > 0){
    // si no encontro por el id
$row = $res->fetch_all(MYSQLI_ASSOC);
echo json_encode($row);


}
else{
    echo " email y/o contraseña son invalidos ";
}
?>