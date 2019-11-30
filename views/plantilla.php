<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practiva MVC con php</title>
    <!--=====================================
	PLUGINS DE CSS
	======================================-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--=====================================
	PLUGINS DE JS
	======================================-->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled Fontawesome-->

    <script src="https://kit.fontawesome.com/515d272bfa.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>
    <div class="container-fluid">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if(isset( $_GET["pagina"])): ?>
                    
                    <?php if($_GET["pagina"] == "registro"): ?>      
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                        </li>
                    <?php else: ?>   
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                        </li>
                    <?php endif ?>
                    <?php if($_GET["pagina"] == "inicio"): ?>      
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">inicio</a>
                        </li>
                    <?php else: ?>   
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">inicio</a>
                        </li>
                    <?php endif ?>
                    <?php if($_GET["pagina"] == "login"): ?>      
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=login">Ingreso</a>
                        </li>
                    <?php else: ?>   
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=login">Ingreso</a>
                        </li>
                    <?php endif ?>
                    <?php if($_GET["pagina"] == "salir"): ?>      
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=salir">salir</a>
                        </li>
                    <?php else: ?>   
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">salir</a>
                        </li>
                    <?php endif ?>
                    <?php else: ?>   
                <li class="nav-item">
                    <a class="nav-link active " href="index.php?pagina=registro">Registro</a>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link " href="index.php?pagina=inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index.php?pagina=login">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index.php?pagina=salir">Salir</a>
                </li>
                <?php endif ?> 
              
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container py-5">
           <?php 

           if(isset($_GET["pagina"])){
               if($_GET["pagina"]== 'registro' ||
               $_GET["pagina"]== 'inicio'||
               $_GET["pagina"]== 'login'||
               $_GET["pagina"]== 'salir'){
                include "pages/".$_GET["pagina"].".php";
               }else{
                   include "pages/error404.php";
               }
           }else{
               include "pages/registro.php";
           }

           ?>
        </div>
    </div>

</body>

</html>