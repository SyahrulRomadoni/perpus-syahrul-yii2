<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Petugas */

$this->title = 'Petugas : ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Petugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- View admin -->
<?php if (Yii::$app->user->identity->id_user_role == 1): ?>
<div class="petugas-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Petugas : <?= $model->nama; ?>.</h3>
    </div>

    <div class="box-body">

        <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

        <p>
            <?= Html::a('<i class="fa fa-pencil"> Edit</i>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('<i class="fa fa-trash"> Hapus</i>', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                'nama',
                'alamat',
                'telepon',
                'email:email',
            ],
        ]) ?>

    </div>

</div>
<?php endif ?>

<!-- View petugas -->
<?php if (Yii::$app->user->identity->id_user_role == 3): ?>
<div class="petugas-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Biodata Petugas : <?= $model->nama; ?>.</h3>
    </div>

    <div class="box-body">

        <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

        <p>
            <?= Html::a('<i class="fa fa-pencil"> Edit</i>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?php /*
            <?= Html::a('<i class="fa fa-trash"> Hapus</i>', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
            */ ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                'nama',
                'alamat',
                'telepon',
                'email:email',
            ],
        ]) ?>

    </div>

</div>

<div class="form-group">
    <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
</div> 
<?php endif ?>