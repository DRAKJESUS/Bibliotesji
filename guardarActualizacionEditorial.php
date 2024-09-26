<?php

include('conexion/conectar.php');
// Recibir datos del formulario

$numeroEditorialA = $_GET['txtNoEditorial'];
$nombreEditorialA = $_GET['txtNEditorial'];
$estadoEditorialA = $_GET['txtEEditorial'];

$actualizarEditorial = "CALL guardarAcctualizacionEditorial($numeroEditorialA, '$nombreEditorialA', '$estadoEditorialA')";

if(mysqli_query($cn,$actualizarEditorial)){
    header("location:consultar-editorial.php");
}else{
    echo("Problemas al guardar el registro");
}

?>