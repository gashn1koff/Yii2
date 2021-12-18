<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Send form page';
?>

<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'name')->label('Name')?>
<?= $form->field($model, 'email')->input('Email')?>
<?= $form->field($model, 'text')->label('Text message')?>
<?= Html::submitButton('Send message', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end();?>
