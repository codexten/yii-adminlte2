<?php
/**
 * @var yii\web\View $this
 * @var codexten\yii\modules\auth\models\LoginForm $model
 * @var codexten\yii\modules\auth\Module $module
 */

$this->title = Yii::t('codexten:user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;

$this->params['body']['options'] = ['class' => 'hold-transition login-page'];
?>

<div class="login-box">
    <div class="login-logo">
        <?= Yii::$app->name ?>
    </div>
    <div class="login-box-body">

        <?= $this->render('@moduleAuth/views/account/login/_form.php', [
            'model' => $model,
            'module' => $module,
        ]) ?>

    </div>
</div>

