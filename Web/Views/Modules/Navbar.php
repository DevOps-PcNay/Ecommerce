  <!-- Navbar -->
	<!-- Para que desaparezca la punta flecha hacia abajo en el Boton Categorias, se termina de cargar el DOM y lo quitara.--> 


	<!-- Para el espacio de la seccion de logo  y el slider es aqui donde se modifica.--> 
<div class="container py-2 py-lg-3">

	<div class="row"> 
	
		<!-- Define los tamanos de la pantalla, para pequenas y Grandes  -->
		<div class="col-12 col-lg-2 mt-1"> 
			<!-- Logo Tipo --> 
			<div class="d-flex justify-content-center ">
				<a href="<?php echo $path ?>Views/Assets/index3.html" class="navbar-brand">
					<img src="<?php echo $path ?>Views/Assets/Img/Template/logo.png" alt="Logo Ecommerce" class="brand-image img-fluid py-3 px-5 px-lg-5 p-lg-0 pe-lg-3">
				</a>

			</div> <!-- <div class=" d-flex justify-content-center"> -->

		</div> <!-- <div class="col-12 col-lg mt-1">  -->


		<div class="col-12 col-lg-7 col-xl-8 mt-1 px-3 px-lg-0">
			<!-- Menu de busqueda  
			"nav-link float-start" = Para que el menu Hamburguesa flote hacia arriba es decir que el menu hambuergusa se coloque aun lado" 
			-->
			<a class="nav-link float-start" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				<div class="dropdown px-1 float-start templateColor" >
					<!--  data-bs-toggle = Activa el submenu al oprimir el boton -->
						<a id="dropdownSubMenu1" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-uppercase">
						<span class="d-lg-block d-none">Categorias<i class="ps-lg-2 fas fa-th-list"></i></span>
						<span class="d-lg-none d-block"><i class="fas fa-th-list"></i></span>
					
					</a>				

						<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
							
							<!-- Level two dropdown-->
							<li class="dropdown-submenu dropdown-hover">
								<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase"><i class="fas fa-tshirt pe-2 fa-xs" ></i>Ropa</a>

								<ul  class="border-0 shadow py-3 ps-3 d-block d-lg-none">
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Ropa Para Dama</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Ropa Para Hombra</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Ropa Deportiva</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Ropa Infantil</a>
									</li>

								</ul> <!-- <ul aria-labelledby="dropdown -->


								<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Ropa Para Dama</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Ropa Para Hombra</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Ropa Deportiva</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Ropa Infantil</a>
									</li>

								</ul> <!-- <ul aria-labelledby="dropdown -->

							</li> <!-- <li class="dropdown-submenu  -->

							<li class="dropdown-submenu dropdown-hover">
								<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase"><i class="fas fa-shoe-prints pe-2 fa-xs" ></i>Calzado</a>

								<ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Calzado Para Dama</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Calzado Para Hombra</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Calzado Deportiva</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Calzado Infantil</a>
									</li>

								</ul> <!-- <ul aria-labelledby="dropdown -->

								
								<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Calzado Para Dama</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Calzado Para Hombra</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Calzado Deportiva</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Calzado Infantil</a>
									</li>

								</ul> <!-- <ul aria-labelledby="dropdown -->

							</li> <!-- <li class="dropdown-submenu  -->

							<li class="dropdown-submenu dropdown-hover">
								<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase"><i class="fas fa-laptop pe-2 fa-xs" ></i>Tecnologia</a>

								<ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Telefonia Movil</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Tabletas Electronicas</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Computadoras</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Auriculares</a>
									</li>

								</ul> <!-- <ul aria-labelledby="dropdown -->
								
								<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Telefonia Movil</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Tabletas Electronicas</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Computadoras</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Auriculares</a>
									</li>

								</ul> <!-- <ul aria-labelledby="dropdown -->

							</li> <!-- <li class="dropdown-submenu  -->

							<li class="dropdown-submenu dropdown-hover">
								<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle text-uppercase"><i class="fas fa-graduation-cap pe-2 fa-xs" ></i>Cursos</a>

								<ul class="border-0 shadow py-3 ps-3 d-block d-lg-none">
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Desarrollo Web</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Aplicaciones Moviles</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Diseno Grafico</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Marketing Digital</a>
									</li>

								</ul> <!-- <ul aria-labelledby="dropdown -->

								<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Desarrollo Web</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Aplicaciones Moviles</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Diseno Grafico</a>
									</li>
									<li>
										<a tabindex="-1" href="#" class="dropdown-item">Marketing Digital</a>
									</li>

								</ul> <!-- <ul aria-labelledby="dropdown -->

							</li> <!-- <li class="dropdown-submenu  -->

							<!-- End Level two -->
							
						</ul> <!-- <ul aria-labelledby="dropdownSubMenu1" --> 

				</div> <!-- <div class="nav-item dropdown"> --> 

				<!-- SEARCH FORM -->
				<form class="form-inline">
					<div class="input-group input-group w-100 me-0 me-lg-4">
						<input class="form-control rounded-0 p-3 pe-5" type="search" placeholder="Buscar ..." style="height:40px" >
						<div class="input-group-append px-2 templateColor">
							<button class="btn btn-navbar text-white" type="submit">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
				</form>

		</div> <!-- <div class="col-7 col-lg-7 col-xl-8 -->

		<div class="col-12 col-lg-3 col-xl-2 mt-1 px-3 px-lg-0">		
			<!-- Carrito de Compras  -->

			<div class="my-2 my-lg-0 d-flex justify-content-center">
				<a href="#">
					<button class="bt btn-default float-start rounded-0 border-0 py-2 px-3 templateColor"><i class="fa fa-shopping-cart"></i> </button>			
				</a>
				<div class="small border float-start ps-2 pe-5 w-100">
					TU CESTA<span>0</span><br>USD		$<span>0</span>	
				</div>
			</div> <!-- <div class="my-2 my-lg-0 d-flex justify-content-center"> -->		
		</div> <!-- <div class="col-12 col-lg-3 col-xl-2 mt-1 px-3 px-lg-0">	 -->

	</div> <!-- <div class="row" > --> 

</div> <!-- <div class == "container" >


