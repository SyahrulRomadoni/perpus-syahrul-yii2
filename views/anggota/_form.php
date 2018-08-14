<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */
/* @var $form yii\widgets\ActiveForm */
?>

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
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
