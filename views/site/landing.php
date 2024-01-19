<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\LandingAsset;
use yii\bootstrap5\Html;
use app\widgets\Alert;

LandingAsset::register($this);
$this->title = "Joel Faura M. | Portfolio";

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.png')]);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
        <div class="prompt-background">
            <div class="container bg-dark">
                <div class="row">
                    <div class="col-12">
                        <p class="text-light"><?= Yii::t('app', 'You are now entering on'); ?> <span class="text-danger underlineable"><b><?= Yii::t("app", "Joel's portfolio.");?> </b></span> <?= Yii::t("app", "Please, press any key to continue (or wait"); ?> <span id="seconds">10</span> <?= Yii::t("app", "seconds"); ?>) ... <span id="cursor" class="blinker">|</span></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>