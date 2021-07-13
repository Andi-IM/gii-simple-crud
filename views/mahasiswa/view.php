<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */

$this->title = 'Data ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mahasiswa-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nim',
            'nama',
            'jekel',
            'tgllahir',
            'id_prodi',
            'email:email',
            'alamat',
            [
                'attribute' => 'image_file',
                'value' => ('/images/uploads/' . $model->image_file),
                'format' => ['image', ['width' => 100, 'heigt' => 100]],
            ],
        ],
    ]) ?>

</div>