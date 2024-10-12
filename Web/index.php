<?php
	/*
	// Depurar los Errores, para cuando se utiliza un servidor XAMPP
	init_set ("display_error",1);
	init_set ("log_errors",1);
	ini_set ("error_log","d:/xampp/htdocs/ecommerce/web/php_error_log");
	*/
	require_once "Controllers/Controller.Template.php";
	$index = new TemplateController();
	$index->index();

?>
