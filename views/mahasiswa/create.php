<?php $this->title = "Entri Mahasiswa"; ?>

<h3>Entri Mahasiswa</h3>
<?= $this->render('_form', [
    'model' => $model,
    ]);
?>