<?php 

	/**
	 * 
	 */
	class homeModel
	{
		
		public function __construct()
		{
			// echo "Mensaje desde el modelo home";
		}

		public function getCarrito($params)
		{
			return "datos del carrito no. ". $params;
		}
	}

?>