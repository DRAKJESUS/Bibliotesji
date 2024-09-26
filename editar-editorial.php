<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bibliotesji | Consultar Libros</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <?php
      include('conexion/conectar.php');
      //recibiedo el id por la url y por un GET
      $idEditorial = $_GET['idE'];
      //echo $idEditorial;
      $sql = "CALL editarEditorial($idEditorial);";
      $ejecSql = mysqli_query($cn, $sql);
      $regEditorial = mysqli_fetch_assoc($ejecSql);
    ?>


    <!-- Main content -->
    <section class="content">
    <section class="content col-10 mx-auto centrar-vertical  mt-5">  
      <div class="container-fluid h-100">
        <div class="card card-row card-secondary">
          <div class="card-header">
            <h3 class="card-title">
           EDITAR EDITORIAL
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-info card-outline">
              <div class="card-header">
                <h5 class="card-title">Editorial</h5>
                <div class="card-tools">
                 
                  <i class="far fa-bookmark"></i>
                  </a>
                </div>
              </div>
              <form class="form-horizontal" method="get" action="guardarActualizacionEditorial.php">
                <div class="card-body">
                  <label for="numeroEditorial" class="col-sm-3 col-form-label">Numero Editorial</label>
                  <div class="col-sm-7">
                  <input name="txtNoEditorial" type="text" class="form-control" value="<?php echo $regEditorial['ideditorialjmz']; ?>">
                  </div>
                </div>

                <div class="card-body">
                  <label for="nombreEditorial" class="col-sm-3 col-form-label">Nombre Editorial</label>
                  <div class="col-sm-7">
                  <input name="txtNEditorial" type="text" class="form-control" value="<?php echo $regEditorial['nombreeditorialjmz']; ?>">
                  </div>
                </div>

                <div class="card-body">
                  <label for="estadoEditorial" class="col-sm-3 col-form-label">Estado Editorial</label>
                  <div class="col-sm-7">
                  <input name="txtEEditorial" type="text" class="form-control" value="<?php echo $regEditorial['estadoE']; ?>">
                  </div>
                </div>
                <div class="card-footer text-center">
                        <button type="submit" class="btn btn-info mx-auto">Actualizar Registro</button>
                    </div>
              </form>
            </div>
           
          </div>
        </div>
       
      </div>
    </section>
  </div>

</boby>
</html>