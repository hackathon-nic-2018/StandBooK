<html>
<head>
	<title>Registro de libro</title>
	<link rel="stylesheet" href="estil.css" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/animate/animate.min.css">
  <!-- theme css -->
  <link rel="stylesheet" href="css/theme.min.css">
  <link rel="stylesheet" href="css/custom.css">

	<script type="text/javascript" src="functions.js"></script>	
</head>

<body>

<header id="header">
    <div class="container">
      <div class="navbar-backdrop">
        <div class="navbar">
          <div class="navbar-left">
            <a class="navbar-toggle"><i class="fa fa-bars"></i></a>
            <a href="index.html" class="logo">STANDBOOK</a>
            <nav class="nav">
              <ul>
                <li class="has-dropdown">
                  <a href="index.html">Inicio</a>
                </li>
                <li class="has-dropdown mega-menu">
                  <a href="#">Categorias</a>
                  <ul>
                    <li>
                      <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="img">
                              <a href="Literatura.html"><img src="img/menu/menu-1.jpg" alt="Last of Us: Part 2"></a>
                              <span class="badge badge-ps4">Literatura</span>
                            </div>
                            <h4><a href="#">200 Nuevos libros</a></h4>
                            <span>Diciembre 1, 2018</span>
                          </div>
                          <div class="col">
                            <div class="img">
                              <a href="#"><img src="img/menu/menu-2.jpg" alt="Injustice 2"></a>
                              <span class="badge badge-steam">Historia</span>
                            </div>
                            <h4><a href="#">57 Nuevos</a></h4>
                            <span>Agosto 19, 2018</span>
                          </div>
                          <div class="col">
                            <div class="img">
                              <a href="#"><img src="img/menu/menu-3.jpg" alt="Bioshock: Infinite"></a>
                              <span class="badge badge-xbox-one">Poesía</span>
                            </div>
                            <h4><a href="#">145 Recientes</a></h4>
                            <span>Dicembre 1, 2018</span>
                          </div>
                          <div class="col">
                            <div class="img">
                              <a href="#"><img src="img/menu/menu-4.jpg" alt="Batman: Arkham Knight"></a>
                              <span class="badge badge-ps4">Ciencias</span>
                            </div>
                            <h4><a href="#">35 Libros en promocion</a></h4>
                            <span>Diciembre 1, 2018</span>
                          </div>
                          <div class="col">
                            <div class="img">
                              <a href="#"><img src="img/menu/menu-5.jpg" alt="Bioshock: Infinite"></a>
                              <span class="badge badge-pc">Matemáticas</span>
                            </div>
                            <h4><a href="game-post.html">15 Nuevos León</a></h4>
                            <span>Noviembre 27, 2018</span>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                
                <li><a href="videos.html">Videos</a></li>

                <li class="has-dropdown">
                  <a href="forums.html">El Foro</a>
                  <ul>
                    <li><a href="#">Temas del foro</a></li>
                    <li><a href="#">Mensajes</a></li>
                    <li><a href="#">Crear Foro</a></li>
                  </ul>
                </li>
                <li class="has-dropdown">
                  <a href="#">Tiendas</a>
                  <ul>
                    <li class="has-dropdown">
                      <a href="#">Tiendas</a>
                      <ul>
                        <li><a href="#">Lista de Tiendas</a></li>
                        <li><a href="#">Post tiendas</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown">
                      <a href="#">Opiniones</a>
                      <ul>
                        <li><a href="#">Lista de opiniones</a></li>
                        <li><a href="#">Revisar publicación</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown">
                      <a href="#">Los foros</a>
                      <ul>
                        <li><a href="#">Foro</a></li>
                        <li><a href="#">Tema del foro</a></li>
                        <li><a href="#">Mensaje del Foro</a></li>
                        <li><a href="#">Crear Foro</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Galeria</a></li>
                    <li class="#">
                      <a href="#">Videos</a>
                      <ul>
                        <li><a href="#">Lista de videos</a></li>
                        <li><a href="#">post video</a></li>
                      </ul>
                    </li>
                    <li class="has-dropdown">
                      <a href="#">Usuarios</a>
                      <ul>
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">Iniciar sesión</a></li>
                        <li><a href="#">Register</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">preguntas frecuentes</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <div class="nav navbar-right">
            <ul>
              <li class="hidden-xs-down"><a href="#">Iniciar Sesión</a></li>
              <li class="hidden-xs-down"><a href="#">Registrarse</a></li>
              <li><a data-toggle="search"><i class="fa fa-search"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="navbar-search">
        <div class="container">
          <form method="post">
            <input type="text" class="form-control" placeholder="Búscar...">
            <i class="fa fa-times close"></i>
          </form>
        </div>
      </div>
    </div>
  </header>

<section class="bg-image bg-image-sm" style="background-image: url('img/bg/login.jpg');">
    <div class="overlay"></div>
    <div class="container">      
			<form action="añadir_libro.php" method="POST" name="formu" id="formula" class="formulario" enctype="multipart/form-data">
			<h1 class="formulario_titulo">Registro de libro</h1>
	
            <input type="text" name="titulo" placeholder="titulo del libro" class="formulario_input">
            <input type="text" name="idioma" placeholder="idioma" class="formulario_input">
            <input type="textarea" rows="2" cols="50" name="descripcion" placeholder="descripcion_del_libro" class="formulario_input">
              <input type="text" name="editorial" placeholder="editorial" class="formulario_input"> 
              <input type="text" name="autor" placeholder="autor" class="formulario_input">   
              <input type="file" name="foto" placeholder="imagen" class="formulario_input">  
              <input type="number" name="precio" placeholder="valor en cordobas del libro" class="formulario_input">          
            <input type="submit" name="guardar"  value="Guardar" class="formulario_input">
            <input type="reset" name="cancelar"  value="Cancelar" class="formulario_input">
			</form>
    </div>
			<?php
			include("conexion.php");
			
			
			if(isset($_POST["guardar"])){
				$titulo=$_POST["titulo"];
				$idioma=$_POST["idioma"];
				$descripcion=$_POST["descripcion"];
                $editorial=$_POST["editorial"];
                $precio=$_POST["precio"];
                $autor=$_POST["autor"];
                $foto=$_FILES["foto"];
                
				$codigo=1;
				
                    mysqli_query($con,"INSERT INTO libros VALUES('$codigo','$titulo','$idioma','$precio','$autor','$editorial','$foto','$descripcion')");
					$codigo=$codigo+1;
					
					echo "datos guardados";
				
            }

            
            

			
			
			?>
			
</body>
</html>