<?php use yii\helpers\Url; ?>

<div class="btn-con">
    <a href="<?= Url::to(['site/download']); ?>" target="_blank" class="main-btn">
        <span class="btn-text"><?= Yii::t('app','Download CV'); ?></span>
        <span class="btn-icon"><i class="fas fa-download"></i></span>
    </a>
</div>