<?php 
include("conexion.php");
$active1="";
$active2="";
$active3="";
$active4="active";
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<title>NovaBelleza</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=Zen+Antique+Soft&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="icon" href="img/novabelleza.ico">	
<!--espacio-->
	
</head>
<body>
    <!--barra de menu-->
<header class="header" id="Inicio">
		<img src="img/hambuguersa.svg" alt="" class="hamburguesa">
		<nav class="menu-navegacion">
			<a href="#Inicio">Inicio</a>
			<a href="#Servicio">Servicio</a>
			<a href="#galeria">Galeria</a>
			<a href="#Expertos">Expertos</a>
			<a href="#Contacto">Contactos</a>
			<a href="../clinica_novabelleza/frontend/login.php">ingreso</a>
		</nav>
		<div class="contenedor head"> 
			<h1 class="titulo">NovaBelleza</h2>
			<p class="copy">MEDICINA ESTETICA Y VEJEZ SALUDABLE</p>
		</div>
	</header> <!--barra de menu fin-->
    <!--inicio nuestros servicios -->
    <main>
		<section class="contenedor" id="Servicio">
			<h2 class="subtitulo">Nuestro Servicio</h2>
			<div class="contenedor-servicio">
				<img src="img/img1.svg" alt="" >
				<div class="img1-servicio">
			<div class="service">
				<h3 class="n-service"><span class="number">1 </span> MISION</h3>
				<p> Novabelleza Medicina Estética, es un centro especializado en tratamientos médicos estéticos personalizados, que logra mantener la armonía estética del rostro y el cuerpo.  </p>
			</div>
			<div class="service">
				<h3 class="n-service"><span class="number">2 </span> VISIÓN</h3>
				<p> Se enfoca en brindar una asesoría integral a cada paciente según su necesidad, guiando y asesorando de manera profesional, para tomar la mejor decisión según su estructura ósea y su personalidad. </p>
			</div><main><div class="service">
				<h3 class="n-service"><span class="number">3 </span> OBJETIVO</h3>
				<p> El equipo de Novabelleza, ofrece a sus pacientes, una amplia gama de tratamientos avanzados y eficaces, que les ayuda a conseguir los resultados deseados. </p>
			</div></main>
				</div>
			</div>
			
		</section><!-- nuestros servicios fin -->
        <!--inicio galeria-->
        <section class="galeria" id="galeria">
			<div class="contenedor">
				<h2 class="subtitulo">Galeria</h2>
				<div class="contenedor-galeria"	>
                <div class="container gallery-container">

    <div class="tz-gallery">

        <div class="row">
		<?php
			$nums=1;
			$sql_banner_top=mysqli_query($con,"select * from banner where estado=1 order by orden ");
			while($rw_banner_top=mysqli_fetch_array($sql_banner_top)){
		?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/banner/<?php echo $rw_banner_top['url_image'];?>">
                        <img src="img/banner/<?php echo $rw_banner_top['url_image'];?>" alt="<?php echo $rw_banner_top['titulo'];?>">
                    </a>
                    <div class="caption">
                        <h3><?php echo $rw_banner_top['titulo'];?></h3>
                        <p><?php echo $rw_banner_top['descripcion'];?></p>
                    </div>
                </div>
            </div>
		<?php
			if ($nums%3==0){
				echo '<div class="clearfix"></div>';
			}
			$nums++;
			}
		?>	
            
            
        </div>

    </div>

</div>
</div>
			</div>
		</section>
        <!--crea las imagenes sobrepuestas al sistema con css linea 136- 160-->
		<section class="imagen-light">
			<img src="img/cerrar.svg" alt=" " class="close">
			<img src="" alt="" class="agregar-imagen">
		</section>
		<section class="contenedor" id="Expertos">
			<h2 class="subtitulo">Expertos en: </h2>
			<section class="expert">
				<div class="cont-expert">
					<img src="img/img2.svg" alt="">
					<h3 class="n-expert">Rejuvenecimiento</h3>
				</div>
				<div class="cont-expert">
					<img src="img/img3.svg" alt="">
					<h3 class="n-expert">Confianza</h3>
				</div>
				<div class="cont-expert">
					<img src="img/img4.svg" alt="">
					<h3 class="n-expert">Calidad integral</h3>
				</div>

			</section>
		</section>
		 <a href="../chatbot//" class="chat-button" target="_blank" > </a>
	</main>
	<footer id="Contacto">
		<div class="contenedor footer-content">
			<div class="contact-us">
				<h2 class="brand">NovaBelleza</h2>
				<p>Medicina Estetica y Vejez Saludable</p>
			</div>
			<div class="social-media" >

				<a href="https://www.google.com/maps/@-16.5237594,-68.112688,21z" target="_blank" class="social-media-icon">
				<i title= "Visitanos" title= "Contactanos" class='bx bx-location-plus' ></i></a>
				<a href="../chat/login.php" target="_blank"  class="social-media-icon">
				<i class='bx bx-message-dots'></i></a>
				<a href="http://localhost/proyecto/proyecto/experimento/hospital-master/hospital-master/menu.php" class="social-media-icon" target="_blank" >
				<i class='bx bxl-facebook-circle'></i></a>	
			</div>
		</div>
		<div class="line"></div>
	</footer>
	<script src="js/lightbox.js"></script>
	<script src="js/menu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>