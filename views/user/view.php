<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title =  "User : " . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- View admin -->
<?php if (Yii::$app->user->identity->id_user_role == 1): ?>
<div class="user-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail User : <?= $model->username; ?>.</h3>
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
                'username',
                //'password',
                'id_anggota',
                'id_petugas',
                'id_user_role',
                'status',
            ],
        ]) ?>

    </div>

</div>
<?php endif ?>

<!-- View anggota -->
<?php if (Yii::$app->user->identity->id_user_role == 2): ?>
<?php $this->title = $model->username; ?>

<div class="user-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail User : <?= $model->username; ?>.</h3>
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
                'username',
                //'password',
                //'id_anggota',
                //'id_petugas',
                //'id_user_role',
                //'status',
            ],
        ]) ?>

    </div>

</div>
<?php endif ?>

<!-- View petugas -->
<?php if (Yii::$app->user->identity->id_user_role == 3): ?>
<div class="user-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail User : <?= $model->username; ?>.</h3>
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
                'username',
                //'password',
                'id_anggota',
                'id_petugas',
                'id_user_role',
                'status',
            ],
        ]) ?>

    </div>

</div>
<?php endif ?>