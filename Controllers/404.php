<?php 
		
	/**
	 * El controlador que se carga en las paginas que no existen
	 */
	class Errors extends Controllers
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function notFound()
		{
			$this->views->getView($this, "404");
		}
	}

	$notFound = new Errors();
	$notFound->notFound();