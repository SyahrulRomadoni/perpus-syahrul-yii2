<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penulis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penulis-form">

    <?php $form = ActiveForm::begin([
    	// Membuat validasi misal nama atau apa sudah ada.
        //'id' => 'Kategori',
        'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($model, 'nama')->textInput(['minlength' => 6, 'maxlength' => 255]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telepon')->textInput(['minlength' => 6, 'maxlength' => 13]) ?>

    <?= $form->field($model, 'email')->textInput(['minlength' => 6, 'maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
