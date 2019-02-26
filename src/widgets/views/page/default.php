<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 10/8/18
 * Time: 8:30 PM
 */

$widget = $this->context;

/* @var $this \yii\web\View */
/* @var $widget \codexten\yii\web\widgets\Page */
/* @var $content string */
?>

<div class="box">
    <div class="box-header">
        <div class="pull-right box-tools">

            <?= $widget->renderContent('main-actions') ?>

        </div>
    </div>
    <div class="box-body">

        <?= $content ?>

    </div>
</div>

