<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use app\models\Buku;
use app\models\Anggota;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php /*<?= $form->field($model, 'id_buku')->textInput() ?>*/ ?>
    <?= $form->field($model, 'id_buku')->widget(Select2::classname(), [
        'data' =>  Buku::getList(),
        'options' => [
          'placeholder' => '- Pilih Penulis -',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?php /*<?= $form->field($model, 'id_anggota')->textInput() ?>*/ ?>
    <?= $form->field($model, 'id_anggota')->widget(Select2::classname(), [
        'data' =>  Anggota::getList(),
        'options' => [
          'placeholder' => '- Pilih Penulis -',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?php /*<?= $form->field($model, 'tanggal_pinjam')->textInput() ?>*/ ?>
    <?= $form->field($model, 'tanggal_pinjam')->widget(DatePicker::className(), [
            'removeButton' => false,
            'value' => date('Y-m-d'),
            'options' => ['placeholder' => 'Tahun Terbit'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>

    <?php /*<?= $form->field($model, 'tanggal_kembali')->textInput() ?>*/ ?>
    <?php /*
    <?= $form->field($model, 'tanggal_kembali')->widget(DatePicker::className(), [
            'removeButton' => false,
            'value' => date('Y-m-d'),
            'options' => ['placeholder' => 'Tahun Terbit'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>
    */ ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
