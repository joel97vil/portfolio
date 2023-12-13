<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\LandingAsset;
use yii\bootstrap5\Html;

LandingAsset::register($this);

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100 bg-dark">
        <div class="container bg-dark">
            <div class="row">
                <div class="col-12">
                    <p class="text-light">You are now entering on <span class="text-danger">Joel's portfolio. </span> Please, press any key to continue (or wait <span id="seconds">10</span> seconds) ... <span id="cursor" class="blinker">|</span></p>
                </div>
            </div>
        </div>
    </body>
</html>