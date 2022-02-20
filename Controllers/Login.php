<?php 
	// require_once("Models/TCategoria.php");
	// require_once("Models/TProducto.php");
	class Login extends Controllers{
		// use TCategoria, TProducto;s
		public function __construct()
		{
			parent::__construct();
			session_start();
		}

		public function login()
		{
			$data['page_tag'] = "Login";
			$data['page_title'] = "Tienda Virtual";
			$data['page_name'] = "Login";
			$data['page_functions_js'] = "functions_login.js";

			$this->views->getView($this,"login",$data); 
		}

	}
 ?>