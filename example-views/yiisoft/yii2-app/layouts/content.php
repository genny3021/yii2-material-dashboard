<?php
    /** @var string $content */

use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
?>
<div class="content">
    <div class="container-fluid">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget([
                'homeLink' => [
                    'label' => Yii::t('app', 'Home'),
                    'url' => ['default/index'],
                ],
                'links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?php $directoryAsset; ?>
        <?= $content; ?>
    </div>
</div>