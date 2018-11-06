<?php

namespace pvlg\yii2\ColorAdminTheme\assets\plugins;

use yii\web\AssetBundle;

class JsCookieAsset extends AssetBundle
{
    public $sourcePath = '@color-admin-theme-assets';
    public $js = [
        'plugins/js-cookie/js.cookie.js',
    ];
}
