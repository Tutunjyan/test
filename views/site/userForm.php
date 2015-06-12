<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?
echo "Hi am in master branch";
	 if(Yii::$app->session->hasFlash('mimi'))
		{
			echo Yii::$app->session->getFlash('mimi');
		}
?>


<?php $form = ActiveForm::begin(); ?>
<?php echo $form->field($model, 'name'); ?>
<?php echo  $form->field($model, 'email'); ?>
<?php echo  $form->field($model, 'password')->passwordInput(); ?>
<?php echo  $form->field($model, 'Repassword')->passwordInput(); ?>



<?= Html::submitButton('Submit' , ['class'=>'btn btn-success']);?>

<?php ActiveForm::end(); ?>