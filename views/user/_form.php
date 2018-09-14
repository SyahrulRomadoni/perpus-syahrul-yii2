<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<!-- From admin -->
<?php if (Yii::$app->user->identity->id_user_role == 1): ?>
<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?php /*<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>*/ ?>

    <?php /*<?= $form->field($model, 'id_anggota')->textInput() ?>*/ ?>

    <?php /*<?= $form->field($model, 'id_petugas')->textInput() ?>*/ ?>

    <?php /*<?= $form->field($model, 'id_user_role')->textInput() ?>*/ ?>

    <?php /*<?= $form->field($model, 'status')->textInput() ?>*/ ?>

    <div class="form-group">
        <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
        <?= Html::submitButton('Simpan Username', ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-key"> Ganti Password</i>', ['change-password', 'id' => $model->id], ['class' => 'btn btn-primary']); ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php endif ?>

<!-- From anggota -->
<?php if (Yii::$app->user->identity->id_user_role == 2): ?>
<div class="user-form">

    <div class="form-group">
        <?= Html::a('<i class="fa fa-user"> Biodata</i>', ['anggota/view', 'id' => $model->id_anggota], ['class' => 'btn btn-primary']); ?>
        <?= Html::a('<i class="fa fa-key"> Ganti Password</i>', ['change-password', 'id' => $model->id], ['class' => 'btn btn-primary']); ?>
    </div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?php /*<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>*/ ?>

    <?php /*<?= $form->field($model, 'id_anggota')->textInput() ?>*/ ?>

    <?php /*<?= $form->field($model, 'id_petugas')->textInput() ?>*/ ?>

    <?php /*<?= $form->field($model, 'id_user_role')->textInput() ?>*/ ?>

    <?php /*<?= $form->field($model, 'status')->textInput() ?>*/ ?>

    <div class="form-group">
        <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
        <?= Html::submitButton('Simpan Username', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php endif ?>

<!-- From petugas -->
<?php if (Yii::$app->user->identity->id_user_role == 3): ?>
<div class="user-form">

    <div class="form-group">
        <?= Html::a('<i class="fa fa-user"> Biodata</i>', ['petugas/view', 'id' => $model->id_petugas], ['class' => 'btn btn-primary']); ?>
        <?= Html::a('<i class="fa fa-key"> Ganti Password</i>', ['change-password', 'id' => $model->id], ['class' => 'btn btn-primary']); ?>
    </div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?php /*<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>*/ ?>

    <?php /*<?= $form->field($model, 'id_anggota')->textInput() ?>*/ ?>

    <?php /*<?= $form->field($model, 'id_petugas')->textInput() ?>*/ ?>

    <?php /*<?= $form->field($model, 'id_user_role')->textInput() ?>*/ ?>

    <?php /*<?= $form->field($model, 'status')->textInput() ?>*/ ?>    

    <div class="form-group">
        <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
        <?= Html::submitButton('Simpan Username', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php endif ?>