<?php
	// Obtiene el nombre del dominio.
	// ::path() = Se llama a la funcion directamente.
	// Se puede ejecutar varias veces con una sola vez que se llame. ademas se define de forma "Estatica"

	$path = TemplateController::path()."curso-web/Ecommerce/Web/";
	//$path = "www.miportalweb.org/curso-web/Ecommerce/";
	//echo "<pre>";print_r($path);echo"</pre>";
	//exit;

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>

	<!-- Carga primero antes de que cargue informacion en el DOM --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation + Sidebar</title>

  <!-- Google Font: Source Sans Pro -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 

	<!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $path ?>Views/Assets/Css/Plugins/fontawesome-free/css/all.min.css">

	<!-- BootStrap 5 --> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 

  <!-- JDSlider -->
	<link rel="stylesheet" href="<?php echo $path ?>Views/Assets/Css/Plugins/jdSlider/jdSlider.css">
	
	<!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path ?>Views/Assets/Css/Plugins/AdminLTE/adminlte.min.css">

	<link rel="stylesheet" href="<?php echo $path ?>Views/Assets/Css/Template/Template.css">

	<!-- Archivo de CSS de Productos. -->
	<link rel="stylesheet" href="<?php echo $path ?>Views/Assets/Css/Products/Products.css">

	
	<!-- jQuery -->
	<script src="<?php echo $path ?>Views/Assets/Js/Plugins/jquery/jquery.min.js"></script>

	
	<!-- Latest compiled JavaScript --> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
 
	<!-- JDSlider -->
	<script src="<?php echo $path ?>Views/Assets/Js/Plugins/jdSlider/jdSlider.js"></script>

</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
	<div class="wrapper">

	<?php 
		include "Modules/Top.php"; 
		include "Modules/Navbar.php"; 
		include "Modules/Sidebar.php";
		include "Pages/Home/Home.php";
		include "Modules/Footer.php"; 
	?>
	 
	
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- AdminLTE App -->
	<script src="<?php echo $path ?>Views/Assets/Js/Plugins/AdminLTE/adminlte.min.js"></script>
</body>

</html>
