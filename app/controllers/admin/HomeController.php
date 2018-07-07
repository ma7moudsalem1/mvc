<?php
namespace MVC\App\Controllers\Admin;
use MVC\App\Core\Controller;
use MVC\App\Models\User;
use Intervention\Image\ImageManager;

class HomeController extends Controller{

	public function index()
	{
		$this->view('home.welcome');
	}

}