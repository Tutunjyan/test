<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;


class UserForm extends Model

	{
		public $name;
		public $email;
		public $password;
		public $Repassword;
	
	
		public function rules()
		{

	
			return[
					[['name','email', 'password','Repassword'], 'required'],
					['email', 'email'],
					['email', 'unique' , 'on'=>'blablabla'],
					[['password','Repassword'],'string','min'=>5 ],
					['password', 'compare', 'compareAttribute' => 'Repassword'],

					//['password', 'validatePassword'],
				

					//['email', 'validateEmail'],
					
				  ];
		}


/*public function validatePassword()
    	

    	if($this->password != $this->Repassword)

       {      
 		$this->addError('password', 'passwords are deferent');
	   }

	   
    }

 public function validateEmail()
 	{
 		$valemail=Form::find()->where(['email' => $this->email]);
//echo $valemail;

    }
*/	
public function cont(){

			

				$form = new Form();
				$form->name = $this->name;
				$form->email = $this->email;
				$form->password = $this->password;
				$form->save();
	if($form->save()){
				return true;
				
			}
			else{return false;}
		}


		
	}


		

?>