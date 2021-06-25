<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Data Barang</h1>
<p>
	<?= Html::a('Create Barang', ['create'], ['class' => 'btn btn-success']) ?>
</p>
<table class="table table-hover">
	<tr>
		<td>No</td>
		<td>Kode Barang</td>
		<td>Nama Barang</td>
		<td>Satuan</td>
		<td>Id Jenis</td>
		<td>Id Supplier</td>
		<td>Harga</td>
		<td>Stok</td>
		<td>Aksi</td>
	</tr>
	<?php foreach ($data_barang as $mahasiswa): ?>
	<tr>
		<td><?= Html::encode($mahasiswa->id) ?></td>
		<td><?= Html::encode($mahasiswa->kode_barang) ?></td>
		<td><?= Html::encode($mahasiswa->nama_barang) ?></td>
		<td><?= Html::encode($mahasiswa->satuan) ?></td>
		<td><?= Html::encode($mahasiswa->id_jenis) ?></td>
		<td><?= Html::encode($mahasiswa->id_supplier) ?></td>
		<td><?= Html::encode($mahasiswa->harga) ?></td>
		<td><?= Html::encode($mahasiswa->stok) ?></td>
		<td>
			<?= Html::a('Edit',['barang/update','id'=>$mahasiswa->id]) ?> | 
			<?= Html::a('Hapus',['barang/delete','id'=>$mahasiswa->id],['onclick'=>'return(confirm("Yakin menghapus data ?"))']) ?>
		</td>
	</tr>
	<?php endforeach; ?>	
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>