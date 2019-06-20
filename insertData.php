<?php

require('conectDB.php');


$data['title'] = $_POST['Titulo'];
$data['details'] = $_POST['Detalles'];
$data['req_one'] = $_POST['RequisitoUno'];
$data['req_two'] = $_POST['RequisitoDos'];
$data['req_three'] = $_POST['RequisitoTres'];
$data['req_four'] = $_POST['RequisitoCuatro'];
$data['req_five'] = $_POST['RequisitoCinco'];
$data['footer'] = $_POST['Footer'];
$data['fecha'] = date("d/m/Y");

$con = new ConectorBD('localhost', 'mundocue_userapp', '%Ucp_/MkT#');
$response['conexion'] = $con->initConexion('mundocue_apps');
if($response['conexion']=='OK') {
    if($con->insertData('reg_busquedas', $data)){
        $response['msg']="Exito en la insercion";
    }else {
        $response['msg'] = "Ocurrio un error en la insercion";
    }
}else {
    $response['msg'] = "No se pudo conectar a la base de datos";
}
echo json_encode($response);

?>