<?php 

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */

$this->title = "Entri Mahasiswa"; 
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-create">
    <h3>Entri Mahasiswa</h3>
    <?= $this->render('_form', [
        'model' => $model,
        ]);
    ?>
</div>