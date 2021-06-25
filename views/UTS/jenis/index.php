<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Data Jenis</h1>
<p>
	<?= Html::a('Create Jenis', ['create'], ['class' => 'btn btn-success']) ?>
</p>
<table class="table table-hover">
	<tr>
		<td>No</td>
		<td>Nama Jenis</td>
		<td>Keterangan</td>
		<td>Aksi</td>
	</tr>
	<?php foreach ($data_jenis as $mahasiswa): ?>
	<tr>
		<td><?= Html::encode($mahasiswa->id) ?></td>
		<td><?= Html::encode($mahasiswa->nama_jenis) ?></td>
		<td><?= Html::encode($mahasiswa->keterangan) ?></td>
		<td>
			<?= Html::a('Edit',['jenis/update','id'=>$mahasiswa->id]) ?> | 
			<?= Html::a('Hapus',['jenis/delete','id'=>$mahasiswa->id],['onclick'=>'return(confirm("Yakin menghapus data ?"))']) ?>
		</td>
	</tr>
	<?php endforeach; ?>	
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>