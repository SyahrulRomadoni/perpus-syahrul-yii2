<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */
/* @var $form yii\widgets\ActiveForm */
?>

<!-- From admin -->
<?php if (Yii::$app->user->identity->id_user_role == 1): ?>
<div class="anggota-form">

    <?php $form = ActiveForm::begin([
        // Membuat validasi misal nama atau apa sudah ada.
        //'id' => 'Kategori',
        'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?php /*<?= $form->field($model, 'status_aktif')->textInput() ?>*/ ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php endif ?>

<!-- From anggota -->
<?php if (Yii::$app->user->identity->id_user_role == 2): ?>
<div class="anggota-form">

    <?php $form = ActiveForm::begin([
        // Membuat validasi misal nama atau apa sudah ada.
        //'id' => 'Kategori',
        'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?php /*<?= $form->field($model, 'status_aktif')->textInput() ?>*/ ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan Biodata', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php endif ?>

<!-- From petugas -->
<?php if (Yii::$app->user->identity->id_user_role == 3): ?>
<div class="anggota-form">

    <?php $form = ActiveForm::begin([
        // Membuat validasi misal nama atau apa sudah ada.
        //'id' => 'Kategori',
        'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?php /*<?= $form->field($model, 'status_aktif')->textInput() ?>*/ ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php endif ?>
