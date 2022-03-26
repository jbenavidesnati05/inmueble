<?php

include('conexion.php');
$query = "SELECT id_cliente, nombre, telefono, pais FROM cliente";
$result= mysqli_query($cnn,$query);

if (mysqli_num_rows($result) > 0){

    $jsonclientes = array();

    foreach($result as $reg){
        $jsonclientes ['clientes'][] = $reg;
    }

    echo json_encode($jsonclientes);

}
else{
    echo " No hay clientes para mostrar";
}
?>