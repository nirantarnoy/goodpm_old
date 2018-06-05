<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
       // 'build/css/custom.min.css',
        'css/sweetalert.css',
        'css/nprogress.css',
        'css/smart_wizard_vertical.css',
        'css/smart_wizard.css',
    ];
    public $js = [
    //'build/js/custom.min.js',
    'js/sweetalert.min.js',
    //'js/nprogress.js',
    'js/jquery.smartWizard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
         'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
