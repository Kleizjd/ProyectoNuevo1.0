<?php 
	// require_once("Models/TCategoria.php");
	// require_once("Models/TProducto.php");
	class Usuarios extends Controllers{
		// use TCategoria, TProducto;s
		public function __construct()
		{
			parent::__construct();
			session_start();
		}

		public function Usuarios()
		{
			$data['page_tag'] = "Usuarios";
			$data['page_title'] = "USUARIOS";
			$data['page_name'] = "usuarios";
			$this->views->getView($this,"usuarios",$data); 
		}

	}
 ?>