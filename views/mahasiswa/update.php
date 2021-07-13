<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */

$this->title = 'Edit Data Mahasiswa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahasiswa-update">    
    <?= $this->render('_form', [
        'model' => $model,
        ]);?>
</div>