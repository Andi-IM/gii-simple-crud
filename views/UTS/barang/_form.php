<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Supplier;
use app\models\Jenis;
?>
<div class="prodi-form">
	<div class="col-md-6">
		<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'kode_barang')->textInput() ?>
		<?= $form->field($model, 'nama_barang')->textInput() ?>
		<?= $form->field($model, 'satuan')->textInput() ?>
		<?= $form->field($model, 'id_jenis')->dropDownList(
			ArrayHelper::map(Jenis::find()->all(),'id','nama_jenis'),['prompt' => 'Pilih'])->label('Jenis') ?>
		<?= $form->field($model, 'id_supplier')->dropDownList(
			ArrayHelper::map(supplier::find()->all(),'id','nama_supplier'),['prompt' => 'Pilih'])->label('Supplier') ?>
		<?= $form->field($model, 'harga')->textInput() ?>
		<?= $form->field($model, 'stok')->textInput() ?>
		<div class="form-group">
			<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
		</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>