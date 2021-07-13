<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Prodi;
use app\models\Jurusan;
use kartik\date\DatePicker;
use yii\helpers\Url;
use kartik\depdrop\DepDrop;
use kartik\file\FileInput;

app\assets\FileInputFixAsset::register($this);
/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php

    $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
    ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?php $model->isNewRecord == 1 ? $model->jekel = 'L' : $model->jekel; ?>
    <?= $form->field($model, 'jekel')->radioList(array('L' => 'Laki-laki', 'P' => 'Perempuan'))->label('Jenis Kelamin') ?>

    <?= $form->field($model, 'tgllahir')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Pilih Tanggal ...'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]); ?>

    <?= $form->field($model, 'id_jurusan')->dropDownList(Jurusan::getJurusan(),
        ['id' => 'cat-id', 'prompt' => 'Select Jurusan...'])
    ?>

    <?= $form->field($model, 'id_prodi')->widget(DepDrop::classname(), [
        'data' => Prodi::getProdiList($model->id_jurusan, $model->nim),
        'options' => ['id' => 'prodi', 'prompt' => 'Select Prodi...'],
        'pluginOptions' => [
            'depends' => ['cat-id'],
            'placeholder' => 'Select Prodi...',
            'url' => Url::to(['mahasiswa/subcat'])
        ]
    ]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput()?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>