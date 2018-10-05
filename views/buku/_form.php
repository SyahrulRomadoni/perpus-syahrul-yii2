<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Penulis;
use app\models\Penerbit;
use app\models\Kategori;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buku-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['minlength' => 6, 'maxlength' => true]) ?>

    <?php /*<?= $form->field($model, 'tahun_terbit')->textInput(['maxlength' => true]) ?>*/ ?>
    <?= $form->field($model, 'tahun_terbit')->widget(DatePicker::className(), [
            'removeButton' => false,
            'value' => date('Y-m-d'),
            'options' => ['placeholder' => 'Tahun Terbit'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-mm-dd'
            ]
    ]) ?>

    <?php /*<?= $form->field($model, 'id_penulis')->textInput() ?>*/ ?>
    <?php //if  ($model->id_penulis == null) { ?>
    <?= $form->field($model, 'id_penulis')->widget(Select2::classname(), [
        'data' =>  Penulis::getList(),
        'options' => [
          'placeholder' => '- Pilih Penulis -',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
    <?php //} ?>

    <?php /*<?= $form->field($model, 'id_penerbit')->textInput() ?>*/ ?>
    <?php //if  ($model->id_penerbit == null) { ?>
    <?= $form->field($model, 'id_penerbit')->widget(Select2::classname(), [
        'data' =>  Penerbit::getList(),
        'options' => [
          'placeholder' => '- Pilih Penerbit -',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
    <?php //} ?>

    <?php /*<?= $form->field($model, 'id_kategori')->textInput() ?>*/ ?>
    <?php //if  ($model->id_kategori == null) { ?>
    <?= $form->field($model, 'id_kategori')->widget(Select2::classname(), [
        'data' =>  Kategori::getList(),
        'options' => [
          'placeholder' => '- Pilih Kategori -',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
    <?php //} ?>

    <?php /*<?= $form->field($model, 'sinopsis')->textarea(['rows' => 6]) ?>*/ ?>
    <?= $form->field($model, 'sinopsis')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?php /*<?= $form->field($model, 'sampul')->textInput(['maxlength' => true]) ?>*/ ?>
    <?= $form->field($model, 'sampul')->widget(FileInput::classname(), [
        'data' => $model->sampul,
        'options' => ['multiple' => true],
        //'pluginOptions' => ['previewFileType' => 'any', 'allowedFileExtensions' => ['jpg', 'png', 'jpeg']] 
    ]); ?>

    <?php /*<?= $form->field($model, 'berkas')->textInput(['maxlength' => true]) ?>*/ ?>
    <?= $form->field($model, 'berkas')->widget(FileInput::classname(), [
        'data' => $model->berkas,
        'options' => ['multiple' => true],
        //'pluginOptions' => ['previewFileType' => 'any', 'allowedFileExtensions' => ['doc', 'docx', 'pdf', 'xls', 'xlsx']] 
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
