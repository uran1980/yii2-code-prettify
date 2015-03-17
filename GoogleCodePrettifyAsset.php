<?php

namespace uran1980\yii\assets\codePrettify;

class GoogleCodePrettifyAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/google-code-prettify/src';
    public $js = [
        'prettify.js',
    ];
    public $css = [
        'prettify.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
