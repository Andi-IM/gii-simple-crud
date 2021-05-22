<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title="Data Prodi";
?>

<h1>Prodi</h1>
<p>
    <?= Html::a('Create Prodi', ['create'], ['class'=>'btn btn-success'])?>
</p>
<table class="table table-hover">
    <tr>
        <td>No.</td>
        <td>Nama Prodi</td>
        <td>Keterangan</td>
        <td>Aksi</td>
    </tr>
    <?php 
    $no = 1;
    foreach($data_prodi as $prodi):?>
    <tr>
        <td><?=$no;?></td>
        <td><?= Html::encode($prodi->prodi)?></td>
        <td><?= Html::encode($prodi->keterangan)?></td>
        <td>
            <?= Html::a('Edit', ['prodi/update','id'=>$prodi->id])?> |
            <?= Html::a('Hapus', ['prodi/delete','id'=>$prodi->id],
            ['onclick'=>'return(confirm("Yakin menghapus data ?"))'])?>
        </td>
    </tr>
    <?php $no++; ?>
    <?php endforeach; ?>
</table>
<?= LinkPager::widget(['pagination' => $pagination])?>