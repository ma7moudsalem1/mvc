<?php
namespace MVC\App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent{
	
	protected $table = 'users';
	protected $fillable = [
		'name', 'email', 'password'
	];

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = hashhelper($value);
	}
}