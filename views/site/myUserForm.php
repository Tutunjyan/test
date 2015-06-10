<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
	 if(Yii::$app->session->hasFlash('mimi'))
		{
			echo Yii::$app->session->getFlash('mimi');
		}
?>


<?php $form = ActiveForm::begin(); ?>
<?= $form->field($mymodel, 'name'); ?>
<?= $form->field($mymodel, 'email'); ?>



<?= Html::submitButton('Submit' , ['class'=>'btn btn-success']);?>