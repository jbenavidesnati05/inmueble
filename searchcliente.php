<?php

include('conexion.php');


$email =$_REQUEST['email'];
$passwd=$_REQUEST['passwd'];

$sql = "SELECT idcust, name, email, phone, paswd FROM customer WHERE email= '$email' and passwd = '$passwd'";

$res = mysqli_query($cnn,$sql);

if (mysqli_num_rows($res) > 0){
    // si no encontro por el email y contraseña
$row = $res->fetch_all(MYSQLI_ASSOC);
echo json_encode($row);


}
else{
    echo " email y/o contraseña son invalidos ";
}
?>