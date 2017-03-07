
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
        @import "../../css/libros.css";
      
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

        <h1 style="text-align: center;">Registrar Libro</h1>

            
            <div class="login-page">
                <div class="form">
                 
               

                <form action="../../controllers/LibrosController.php" method="post">
                    <label>TÍTULO: </label>
                    <input type="text" name="titulo" placeholder="título libro" style="width: 70%"><br/>

                    <input type="file" name="archivo"><br/>

                    
                    <label>AUTOR: </label>
                    <select name="autor_id" align="left">
                    <?php 
                        include '../../controllers/autorController.php'; 

                        $autores = listaAutor();

                        foreach ($autores as $autor): 
                    ?>
                        <option value="<?php echo $autor['id_autor']?>"> <?php echo $autor['nombre_autor'] ?>
                    <?php endforeach ?>
                    </select> <br><br>


                    <label>CATEGORÍA: </label>
                    <select name="categoria_id" align="left">
                    <?php 
                        include '../../controllers/librosController.php'; 

                        $categorias = listaCategoria();

                        foreach ($categorias as $categoria): 
                    ?>
                        <option value="<?php echo $categoria['id_categoria'] ?>"> <?php echo $categoria['descripcion_categoria'] ?>
                    <?php endforeach ?>
                    </select> <br><br>


                    <label>CANTIDAD: </label>
                    <input type="number" name="cantidad" placeholder="cantidad" style="width: 50%"><br/> 
                    <label>DESCRIPCION: </label>
                    <textarea name="comentario" rows="3" cols="30" placeholder="Escriba su comentario"></textarea><br><br>            


                    <button type="submit" name="registrar">Guardar Cambios</button>

                </form>
                </div>
            </div>

    </div>
<div id="footer">
        <p>© Copyright 2012 yourname.com. All Rights Reserved. Busque m&aacute;s plantillas web gratis <a href="http://www.mejoresplantillasgratis.es" target="_blank">en MPG.es</a>.<br/>
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
