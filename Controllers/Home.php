<?php 
		
/**
 * El controlador que se carga en primera instancia 
 */
class Home extends Controllers
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function home()
	{
		$data['tag_page'] = "Home";
		$data['page_title'] = "Pagina Principal";
		$data['page_name'] = "home";
		$data['page_content'] = "lorem ipsum dolor sit amet";

		$this->views->getView($this, "home", $data);
	}
}