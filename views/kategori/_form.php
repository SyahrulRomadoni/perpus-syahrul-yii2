<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-form">

    <?php $form = ActiveForm::begin([
    	// Membuat validasi misal nama atau apa sudah ada.
    	//'id' => 'Kategori',
        'enableAjaxValidation' => true,
    ]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
