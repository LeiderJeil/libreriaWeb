
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="bred<" />
    <meta name="keywords" content="bred<" />
    <meta name="description" content="bred<" />
    <meta name="robots" content="all" />
    <title>Libreria Online</title>
    <style type="text/css" title="currentStyle" media="screen">
        @import "../../css/global.css";
        @import "../../css/login.css";
      
    </style>
    
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    
    
</head>

<body>

<div id="wrapper">
    <div id="top">
        <h1 class="logo"><span class="green1">LIBRERIA</span> WEB</h1>
        <ul id="topnavi">
                <li><a href="index.php">INICIO</a></li>
                <li class="active"><a href="#">LIBROS</a></li>
                <li><a href="#">VENTAS</a></li>
                <li><a href="../usuarios/listado.php">USUARIOS</a></li>
                <li><a href="../../controllers/logout.php">LOGOUT</a></li>

            </ul>
        </div>

    <div id="header">
        <img src="../../img/header.jpg" alt="" width="1000" height="183" />
    </div>

    <div id="main">
        <div class="ic"></div>

        <h1 style="text-align: center;">Registrar Autor</h1>

            
            <div class="login-page">
                <div class="form">
                 
               

                <form action="../../controllers/autorController.php" method="post">
                    
                    <input type="text" name="nombre" placeholder="nombre autor"><br/>            
                    <button type="submit" name="registrar">Registrar</button>

                </form>
                </div>
            </div>

    </div>
<div id="footer">
        <p>© Copyright 2017 l.ticlla@clasesumss.com. All Rights Reserved. Busque m&aacute;s plantillas web gratis <a href="http://www.mejoresplantillasgratis.es" target="_blank">en MPG.es</a>.<br/>
        <span class="darkgrey">Design by <a href="http://www.prontomoda.de/" target="_blank" title="Handtaschen">Handtaschen</a></span></p>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
</script>
