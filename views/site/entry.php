<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm; 
?>
<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'name') ?>
	<?= $form->field($model, 'email') ?>
	<?= $form->field($model, 'notelp') ?>
	<?= $form->field($model, 'alamat') ?>
<div class="form-group">
	<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>