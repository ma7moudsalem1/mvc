<?php
namespace MVC\App\Controllers;
use MVC\App\Core\Controller;
use MVC\App\Models\User;
class HomeController extends Controller{

	public function index()
	{
		var_dump($this->request()->pagse);
		dumper($this->request()->get());
		$this->view();
	}
}