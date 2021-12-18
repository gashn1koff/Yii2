<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Send form page';
?>

<?php $form = ActiveForm::begin(['id' => 'SendForm']);?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'email')?>
<?= $form->field($model, 'text')->textarea()?>
<?= Html::submitButton('Send message', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end();?>
