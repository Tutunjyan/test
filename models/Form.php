<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

	class Form extends ActiveRecord
	{
	public function rules()
{
    return array(
        array('email', 'unique', 'message' => 'Please choose a username.')
        
    );
}
	}

?>