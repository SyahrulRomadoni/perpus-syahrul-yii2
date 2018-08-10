<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-plus"> Tambah Kategori</i>', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-print"> Export Daftar Kategori ke Word</i>', ['daftar-kategori'], ['class' => 'btn btn-info btn-flat']) ?>
        <?= Html::a('<i class="fa fa-print"> Test ke Word</i>', ['test-word'], ['class' => 'btn btn-info btn-flat']) ?>
        <?= Html::a('<i class="fa fa-print"> Test ke Excel</i>', ['test-excel'], ['class' => 'btn btn-info btn-flat']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama',
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
