<?php

namespace app\models;
use yii\base\Model;

class testuser extends Model
{
	public $name;
	public $password;
	
  public function rules(){
		return[
		[['name','password',],'required'],
		['email','email'],
		];
	}
}