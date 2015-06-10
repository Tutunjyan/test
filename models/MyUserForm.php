<?php
namespace app\models;
use yii\base\Model;


class MyUserForm extends Model{

	public $name;
	public $email;
	//public $password;


	public Function rules()
	{

		return [
		[['name','email'],'required'],
		['email','email'],
		];
	}
}

?>