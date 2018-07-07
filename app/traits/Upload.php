<?php
namespace MVC\App\Traits;
use Intervention\Image\ImageManager;

trait Upload{

	public function uploadImage($image)
	{
		$manager = new ImageManager(array('driver' => 'gd'));
		$folderY = date('Y');
		$folderD = date('j');
		$year    = UPLOAD_PATH . $folderY;
		$day     = $year . DS . $folderD;
		$path    = $day . DS;
		if(! folder_exist($year)){
			mkdir($year);
		}

		if(! folder_exist($day)){
			mkdir($day);
		}

		$name    = hash_this(time() . rand(1,200200200)) . '.' . $image->getExtention;
		$ImagePath = $path . $name;
	    $manager->make($image->getRealPath)->save($ImagePath);
	    $finalImageName = '/' . $folderY . '/' . $folderD . '/' . $name;
	    return $finalImageName;
	}
}