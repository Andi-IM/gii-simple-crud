<?php

/* @var $this yii\web\View */
/* @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

$this->beginBlock('content-header'); ?>
About <small>static page</small>
<?php $this->endBlock(); ?>


<div class="site-about">
    <p>This is the About page. You may modify the following file to customize its content:</p>
    <code><?= __FILE__ ?></code>
</div>
