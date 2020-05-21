<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$base_url = Yii::getAlias('web');
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <h1 style="text-align: center;"><?= Html::encode($this->title) ?></h1>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Reset</button>
                    <span class="psw"><a href="<?= "../../frontend/web/index.php?r=site/signup";?>">Sign Up</a></span>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
