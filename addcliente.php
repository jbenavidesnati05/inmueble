<?php

include("conexion.php");

// tomar la info tomada por el front-end
$idcust =$_REQUEST['idcust'];
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$phone =$_REQUEST['phone'];
$passwd=$_REQUEST['paswd'];

//verificar que el correo no se repita
// query = consultar 
$result=mysqli_query($cnn, "SELECT email FROM customer WHERE email = '$email'");
if (mysqli_num_rows($result)==0){
    // si no lo encontro por el email se agrgara
    mysqli_query($cnn,"INSERT INTO customer VALUES('$idcust','$name','$email','$phone','$passwd')");
    echo " el cliente se ha guadado correctamente";
}
else{
    echo " el usuario ya existe";
}
?>