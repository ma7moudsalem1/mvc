<?php
namespace MVC\App\Controllers;
use MVC\App\Core\Controller;
use MVC\App\Models\User;
use Intervention\Image\ImageManager;

class HomeController extends Controller{

	public function index()
	{
		$this->view('home.welcome');
	}

	public function uploade()
	{
		$this->_data['image'] = $this->request()->upload();
		$this->view('home.welcome');
	}
}