<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenulisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penulis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-plus"> Tambah Penulis</i>', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-print"> Export Daftar Penulis ke Word</i>', ['daftar-penulis-word'], ['class' => 'btn btn-info btn-flat']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama',
            'alamat:ntext',
            'telepon',
            'email:email',
            [
                'header' => 'Jumlah Buku',
                'value' => function($model) {
                    return $model->getJumlahBuku();
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
