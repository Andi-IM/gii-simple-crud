<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'email')?>
<?= $form->field($model, 'phone')?>
<?= $form->field($model, 'address')?>
<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>