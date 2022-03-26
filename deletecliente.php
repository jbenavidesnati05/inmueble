<?php

include('conexion.php');


$idcust = $_REQUEST['idcust'];
$sql = "SELECT idcust FROM invoice WHERE idcust = '$idcust'";
$res = mysqli_query($cnn,$sql);

if (mysqli_num_rows($res) == 0){
    $query = "DELETE FROM customer WHERE idcust = '$idcust'";
    mysqli_query($cnn,$query);
    echo " registro eliminado";


}
else{
    echo " usuario no se puede borrar pro que tiene facuras";
}
?>