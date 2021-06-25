<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<table class="table table-hover">
	<tr>
		<td>Kode</td>
		<td>Negara</td>
		<td>Populasi</td>
	</tr>
	<?php foreach ($countries as $country) :?>
	<tr>
		<td><?= Html::encode($country->code) ?></td>
		<td><?= Html::encode($country->name) ?></td>
		<td><?= $country->population ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>