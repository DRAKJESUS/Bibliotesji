<?php
    #recibirlos datos del formulario
    $isbn = $_POST['txtISBN'];
    $titulo = $_POST['txtTitulo'];
    $subtitulo = $_POST['txtSubtitulo'];
    $edicion = $_POST['txtEdicion'];
    $anio = $_POST['txtanio'];
    $noPaginas = $_POST['txtnoPaginas'];
    $editorial = $_POST['cmbEditorial'];
    $categoria = $_POST['cmbCategoria'];
    $seccion = $_POST['cmbSeccion'];

    include("conexion/conectar.php");
    
    #echo "$isbn | $titulo |$subtitulo|$edicion|$anio|$noPaginas|$editorial|$categoria | $seccion"

    $consulta = "CALL InsertarLibro('$isbn','$titulo','$subtitulo','$edicion','$anio','$noPaginas','$editorial','$categoria','$seccion')";
    if(mysqli_query($cn,$consulta)){
        header("location:consultar-libros.php");
    }else{
        echo "Reinice Windows";
    }

?>