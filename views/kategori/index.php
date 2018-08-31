<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-index box box-primary">

    <div class="box-header">
        <h3 class="box-title">Daftar Kategori.</h3>
    </div>

    <div class="box-body">

        <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('<i class="fa fa-plus"> Tambah Kategori</i>', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fa fa-print"> Export Daftar Kategori ke Word</i>', ['daftar-kategori-word'], ['class' => 'btn btn-info btn-flat']) ?>
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

</div>
