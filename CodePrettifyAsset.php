<?php

namespace uran1980\yii\assets\codePrettify;

use Yii;

class CodePrettifyAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@uran1980/yii/assets/codePrettify/assets';
    public $css = [
        'css/desert.css',
    ];
    public $depends = [
        'uran1980\yii\assets\codePrettify\GoogleCodePrettifyAsset',
    ];

    public function init()
    {
        $js = <<<SCRIPT
!(function ($) {
    $('code').each(function () {
        var langClass = $(this).attr('class') || '';
        $('code').parent('pre').addClass('prettyprint linenums ' + langClass);
    });
    prettyPrint();
})(window.jQuery);
SCRIPT;
        Yii::$app->view->registerJs($js, \yii\web\View::POS_READY);

        parent::init();
    }
}
