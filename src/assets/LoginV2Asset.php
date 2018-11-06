<?php

namespace pvlg\yii2\ColorAdminTheme\assets;

use Yii;
use yii\web\AssetBundle;

class LoginV2Asset extends AssetBundle
{
    public $sourcePath = '@color-admin-theme-assets';
    public $js = [
        'js/demo/login-v2.demo.min.js',
    ];
    public $depends = [
        BaseAsset::class,
    ];

    public function init()
    {
        parent::init();

        $js = <<<JS
LoginV2.init();
JS;
        Yii::$app->view->registerJs($js);
    }
}
