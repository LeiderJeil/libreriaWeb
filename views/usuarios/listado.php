
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
      
    </style>
    
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    
    
</head>

<body>

<div id="wrapper">
    <div id="top">
        <h1 class="logo"><span class="green1">LIBRERIA</span> WEB</h1>
        <ul id="topnavi">
     
                <li><a href="../../index.php">INICIO</a></li>
                <li><a href="#">LIBROS</a></li>
                <li><a href="#">VENTAS</a></li>
                <li class="active"><a href="listado.php">USUARIOS</a></li>
                <li><a href="../../controllers/logout.php">LOGOUT</a></li>

        </ul>
    </div>
    <div id="header">
        <img src="../../img/header.jpg" alt="" width="1000" height="183" />
    </div>

    <div id="main">
		<div class="ic"></div>

        <h1 style="text-align: center;">Lista de Usuarios</h1>

        <table border="2" align="center">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cuenta</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        include '../../controllers/usuariosController.php'; 

                        $usuarios = listaUsuarios();

                        foreach ($usuarios as $usuario): 
                    ?>
                    
                    <tr>
                        <td><?php echo $usuario['id_usuario'] ?></td>
                        <td><?php echo $usuario['nombre'] ?></td>
                        <td><?php echo $usuario['apellido'] ?></td>
                        <td><?php echo $usuario['cuenta'] ?></td>
                        <td><?php echo $usuario['contrasenia'] ?></td>
                        <td>
                            <a href="editar.php?id_usuario=<?php echo $usuario['id_usuario'] ?>"">Editar</a> |
                            <a href="../../controllers/eliminarUsuario.php?id_usuario_eliminar=<?php echo $usuario['id_usuario'] ?>" onclick="if(confirm('¿Desea borrar este registro?') === false) {return false;}">Eliminar</a> |
                        </td>
                     </tr>
                    <?php endforeach ?>

                </tbody>
            </table>


        
        <p class="message" align="center">Desea registrar un nuevo usuario? <a href="registrar.php">Registrar Usuario</a></p>

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


