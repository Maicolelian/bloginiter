<?php

class Blog extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();

	}


	public function index() 
	{
		$view["breadcrumb"]  = breadcrumb_admin("users");
		$view["title"] = "Usuario";
		$this->parser->parse("admin/template/body", $view);
	}

}