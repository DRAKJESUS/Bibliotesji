<?php
include('conexion/conectar.php');
//recibiedo el id por la url y por un GET
$idEditorial = $_GET['idE'];
//echo $idEditorial;
$sql = "CALL eliminarEditorial($idEditorial)";
if(mysqli_query($cn,$sql)){
    header("location:consultar-editorial.php");

}else{
    echo "Problemas al eliminar Editorial, consulte al Administrador";
}    

?>