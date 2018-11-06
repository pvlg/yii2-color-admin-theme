<?php

namespace pvlg\yii2\ColorAdminTheme\assets\plugins;

use yii\web\AssetBundle;

class SlimscrollAsset extends AssetBundle
{
    public $sourcePath = '@color-admin-theme-assets';
    public $js = [
        'plugins/slimscroll/jquery.slimscroll.min.js',
    ];
}
