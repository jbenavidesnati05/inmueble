<?php

include('conexion.php');


$id_cliente = $_REQUEST['id_cliente'];
$sql = "SELECT id_cliente FROM cliente WHERE id_cliente = '$id_cliente'";
$res = mysqli_query($cnn,$sql);

if (mysqli_num_rows($res) > 0){
    $query = "DELETE FROM `cliente` WHERE id_cliente = '$id_cliente'";
    mysqli_query($cnn,$query);
    echo " registro eliminado";


}
else{
    echo " usuario no se puede borrar por que tiene deudas";
}
?>