<?php

namespace pvlg\yii2\ColorAdminTheme\assets;

use yii\web\AssetBundle;

class CrossbrowserjsAsset extends AssetBundle
{
    public $sourcePath = '@color-admin-theme-assets';
    public $js = [
        'crossbrowserjs/html5shiv.js',
        'crossbrowserjs/respond.min.js',
        'crossbrowserjs/excanvas.min.js',
    ];
    public $jsOptions = [
        'condition' => 'lte IE9',
    ];
}
