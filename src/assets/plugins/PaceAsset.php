<?php

namespace pvlg\yii2\ColorAdminTheme\assets\plugins;

use yii\web\AssetBundle;
use yii\web\View;

class PaceAsset extends AssetBundle
{
    public $sourcePath = '@color-admin-theme-assets';
    public $js = [
        'plugins/pace/pace.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
