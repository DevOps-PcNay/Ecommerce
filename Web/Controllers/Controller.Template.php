<?php
	class TemplateController
	{

		// Obtener la Vista principal de la Plantilla
		public function index()
		{
			include "Views/Template.php";
		}
		
		// Retorna el nombre del Dominio.
		static public function path()
		{
			// Retornando con el protocolo "HTTPS"
			/*
				// if (!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"]))
				if (!empty($_SERVER["HTTPS"])) // && ("on" == $_SERVER["HTTPS"]))
				{
					return "https://".$_SERVER["SERVER_NAME"]."/";
					// "ecommerce.miportalweb.org"
				}
				else
				{
					return "http://".$_SERVER["SERVER_NAME"]."/";
				}
			*/
			return "https://".$_SERVER["SERVER_NAME"]."/";

		}
	} // class TemplateController
?>
