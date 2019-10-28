<?php

/* @var $this \yii\web\View */
/* @var $content string */

$this->params['body']['options'] = ['class' => 'hold-transition skin-blue sidebar-mini'];

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<?php $this->beginContent('@codexten/yii/web/views/layouts/main.php'); ?>

    <div class="wrapper">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

<?php $this->endContent(); ?>