<?php
$servidor = "localhost";
$usuario = "root";
$contrasenia = ;
$bd = "bibliotesji";


#Conectar al servidor mysql y una BD
$cn = mysqli_connect($servidor, $usuario, $contrasenia, $bd);

# Verificar la conexion
if(!$cn){
    echo "Problemas al conectar con el servidor";
}
# mysqli_query($cn,"SET NAMES=utf8");
# permite leer caracteres especiales
mysqli_set_charset($cn,"utf8");
?>