<?php

namespace backend\assets;

use Yii; # ปิดการใช้งาน BootstrapAsset
use yii\web\AssetBundle;

class AppAsset extends AssetBundle {
    
    # ปิดการใช้งาน BootstrapAsset
    public function init(){
        parent::init();
        Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => [],
            'js' => []
        ];
    }
    
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        
        'vendor/bootstrap-3.3.6/dist/css/bootstrap.min.css',
        'vendor/font-awesome-4.5.0/css/font-awesome.min.css',
        'vendor/ionicons-2.0.1/css/ionicons.min.css',
        
        'vendor/adminLTE/AdminLTE.min.css',
        'vendor/adminLTE/skins/_all-skins.min.css',
        
        'vendor/icheck-1.0.0/flat/blue.css',
        'vendor/morris-0.5.0/morris.css',
        
        'vendor/jvectormap-1.2.2/jquery-jvectormap.min.css',
        'vendor/datepicker-1.0.0/datepicker.css',
        'vendor/daterangepicker-1.3.21/daterangepicker.css',
        'vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        
        'css/site.css',
        
    ];
    
    public $js = [
        
        'vendor/jquery-2.1.4/jquery.min.js',
        'vendor/jquery-ui-1.11.4/jquery-ui.min.js',
        
        'vendor/bootstrap-3.3.6/dist/js/bootstrap.min.js',
        
        'vendor/raphael-2.1.4/raphael-min.js',
        'vendor/morris-0.5.0/morris.min.js',
        'vendor/sparkline-2.1.2/jquery.sparkline.min.js',
        
        'vendor/jvectormap-1.2.2/jquery-jvectormap.min.js',
        'vendor/jvectormap-1.2.2/jquery-jvectormap-world-mill-en.js',
        
        'vendor/knob-1.2.11/jquery.knob.js',
        'vendor/moment-2.11.0/moment.min.js',
        'vendor/daterangepicker-1.3.21/daterangepicker.js',
        
        'vendor/datepicker-1.0.0/datepicker.js',
        'vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        
        'vendor/slimscroll-1.3.0/jquery.slimscroll.min.js',
        'vendor/fastclick-1.0.0/fastclick.min.js',
        
        'vendor/adminLTE/app.min.js',
        'vendor/adminLTE/pages/dashboard.js',
        'vendor/adminLTE/demo.js',

    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
    
}