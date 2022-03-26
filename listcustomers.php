<?php

include('conexion.php');
$query = "SELECT idcust, name, email, phone, paswd FROM customer";
$result= mysqli_query($cnn,$query);

if (mysqli_num_rows($result) > 0){

    $jsoncustomers = array();

    foreach($result as $reg){
        $jsoncustomers ['customers'][] = $reg;
    }

    echo json_encode($jsoncustomers);

}
else{
    echo " No hay clientes para mostrar";
}
?>