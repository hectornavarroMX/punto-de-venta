<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('header');
		echo view('unidades/unidades');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
