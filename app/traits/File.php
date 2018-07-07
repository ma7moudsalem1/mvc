<?php
namespace MVC\App\Traits;

trait File{
	
	public function fileHandle($file)
	{
		$file->getRealPath = $file->tmp_name;
		$file->getExtention = strtolower(pathinfo(basename($file->name),PATHINFO_EXTENSION));
		unset($file->tmp_name);
		return $file;
	}

	public function file($fileName)
	{
		$file = toObject($_FILES[$fileName]);
		return $this->fileHandle($file);
	}

	public function files()
	{
		foreach ($_FILES as $key => $value) {
			$result[$key] = $this->file($key);
		}
		return toObject($result);
	}
}