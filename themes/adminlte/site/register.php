<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Register';

$orang = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];

$rumah = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-home form-control-feedback'></span>"
];

$email = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$telepon = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-earphone form-control-feedback'></span>"
];

$gembok = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Perpustakaan</b>YII2</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Register</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $orang)
            ->label(false)
            ->textInput(['minlength' => 6, 'placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form
            ->field($model, 'password', $gembok)
            ->label(false)
            ->passwordInput(['minlength' => 6, 'placeholder' => $model->getAttributeLabel('password')]) ?>

        <?= $form
            ->field($model, 'nama', $orang)
            ->label(false)
            ->textInput(['minlength' => 6, 'placeholder' => $model->getAttributeLabel('nama')]) ?>

        <?= $form
            ->field($model, 'alamat', $rumah)
            ->label(false)
            ->textInput(['minlength' => 6, 'placeholder' => $model->getAttributeLabel('alamat')]) ?>

        <?= $form
            ->field($model, 'telepon', $telepon)
            ->label(false)
            ->textInput(['maxlength' => 13, 'minlength' => 12, 'placeholder' => $model->getAttributeLabel('telepon')]) ?>

        <?= $form
            ->field($model, 'email', $email)
            ->label(false)
            ->textInput(['minlength' => 6, 'placeholder' => $model->getAttributeLabel('email')]) ?>

        <?= $form->field($model, 'verifyCode')->widget(Captcha::className()) ?>

        <div class="row">
            <!-- /.col -->
            <div class="col-xs-12">
                <div class="col-xs-6">
                    <button type="button" class="btn btn-default btn-block btn-flat" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
                </div>
                <div class="col-xs-6">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                </div>
            </div>
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
