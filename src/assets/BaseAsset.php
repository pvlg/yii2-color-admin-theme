<?php

namespace pvlg\yii2\ColorAdminTheme\assets;

use pvlg\yii2\ColorAdminTheme\assets\plugins\JsCookieAsset;
use pvlg\yii2\ColorAdminTheme\assets\plugins\SlimscrollAsset;
use Yii;
use yii\bootstrap4\BootstrapAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\jui\JuiAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class BaseAsset extends AssetBundle
{
    public $sourcePath = '@color-admin-theme-assets';
    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700',
        'plugins/font-awesome/5.0/css/fontawesome-all.min.css',
        'plugins/animate/animate.min.css',
        'css/default/style.min.css',
        'css/default/style-responsive.min.css',
        'css/default/theme/default.css',
    ];
    public $js = [
        'js/theme/default.min.js',
        'js/apps.js',
    ];
    public $depends = [
        JqueryAsset::class,
        JuiAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
        SlimscrollAsset::class,
        JsCookieAsset::class,
        CrossbrowserjsAsset::class,
    ];

    public function init()
    {
        parent::init();

        $js = <<<JS
App.init();
JS;
        Yii::$app->view->registerJs($js);
    }
}
