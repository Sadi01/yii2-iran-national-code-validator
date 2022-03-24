<?php

namespace sadi01\iranNationalCodeValidator;

use Yii;
use yii\web\AssetBundle;

class ValidationAsset extends AssetBundle
{
    public function init() {
        Yii::setAlias('@iranNationalCodeValidator', __DIR__);

        return parent::init();
    }

    public $sourcePath = '@iranNationalCodeValidator/assets';
    public $js = [
        'runwidget.validation.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}