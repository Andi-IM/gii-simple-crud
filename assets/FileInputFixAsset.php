<?php

namespace app\assets;

use yii\web\AssetBundle;

class FileInputFixAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
        'kartik\file\FileInputAsset',
    ];
}