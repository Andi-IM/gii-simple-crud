<?php
use yii\helpers\Html;
?>

<p>Terimakasih sudah menginputkan pada form:</p>
<ul>
<li><label>Name</label>: <?= Html::encode($model->name)?></li>
<li><label>Email</label>: <?= Html::encode($model->email)?></li>
<li><label>Nomor Telp</label>: <?= Html::encode($model->phone)?></li>
<li><label>Alamat</label>: <?= Html::encode($model->address)?></li>
</ul>