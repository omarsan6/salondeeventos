<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <script src="<?php echo base_url?>Assets/js/index.js"></script>

    <link href="<?php echo base_url; ?>Assets/DataTables/datatables.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url; ?>Assets/DataTables/Bootstrap-4-4.6.0/css/bootstrap.min.css.map" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url;?>Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url;?>Assets/css/bootstrap.css.map">
    <script src="<?php echo base_url?>Assets/js/librerias/index.global.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url;?>Assets/css/estilos.css" type="text/css">
</head>
<body>


<div class="h">
    <nav class="navbar navbar-expand-lg back-li">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"></a>
            <img src="<?php echo base_url?>Assets/img/logo.jpeg" alt="logo"  width="200" height="100" class="d-inline-block align-text-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="w-100 d-flex justify-content-between navbar-nav">

                    <div class="d-flex justify-content-evenly">

                        <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="<?php echo base_url?>">Inicio</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Servicios
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo base_url;?>Servicios/index">Ver servicios</a></li>

                                <?php if(empty($_SESSION['activo'])) { ?>
                                <li><a class="dropdown-item" href="<?php echo base_url;?>Servicios/calendario">Ver calendario</a></li>
                                <?php }  ?>

                                <?php if(isset($_SESSION['activo'])) { ?>
                                    <li><a class="dropdown-item" href="<?php echo base_url;?>Cotizacion/">Cotizar</a></li>
                                <?php }  ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="<?php echo base_url;?>About/index">Acerca de</a>
                        </li>
                        
                    </div>

                    <div>

                        <?php if(empty($_SESSION['activo'])){ ?>
                            <a href="<?php echo base_url;?>Usuarios/iniciarSesion" class="btn-material bg me-2">Iniciar Sesión</a> 
                            <a href="<?php echo base_url;?>Usuarios/registrarUsuario" class="btn-material me-2">Registrarse</a>
                        <?php } else { ?>
                            <a href="<?php echo base_url;?>Cotizacion/salir" class="btn-material me-2">Cerrar sesión</a> 
                        <?php } ?>

                    </div>
                    

                    
                </ul>
            </div>  
        </div>
    </nav>
</div>
