<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Data Supplier</h1>
<p>
	<?= Html::a('Create Supplier', ['create'], ['class' => 'btn btn-success']) ?>
</p>
<table class="table table-hover">
	<tr>
		<td>No</td>
		<td>Nama Supplier</td>
		<td>No Telepon</td>
		<td>Email</td>
		<td>Alamat</td>
		<td>Aksi</td>
	</tr>
	<?php foreach ($data_supplier as $mahasiswa): ?>
	<tr>
		<td><?= Html::encode($mahasiswa->id) ?></td>
		<td><?= Html::encode($mahasiswa->nama_supplier) ?></td>
		<td><?= Html::encode($mahasiswa->notelp) ?></td>
		<td><?= Html::encode($mahasiswa->email) ?></td>
		<td><?= Html::encode($mahasiswa->alamat) ?></td>
		<td>
			<?= Html::a('Edit',['supplier/update','id'=>$mahasiswa->id]) ?> | 
			<?= Html::a('Hapus',['supplier/delete','id'=>$mahasiswa->id],['onclick'=>'return(confirm("Yakin menghapus data ?"))']) ?>
		</td>
	</tr>
	<?php endforeach; ?>	
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>