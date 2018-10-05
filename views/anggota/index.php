<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnggotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anggota';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-index box box-primary">

    <div class="box-header">
        <h3 class="box-title">Daftar Anggota.</h3>
    </div>

    <div class="box-body">

        <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('<i class="fa fa-plus"> Tambah Anggota</i>', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fa fa-print"> Export Daftar Anggota ke Word</i>', ['daftar-anggota-word'], ['class' => 'btn btn-info btn-flat']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'nama',
                'alamat',
                'telepon',
                'email:email',
                //'status_aktif',
                [
                    'attribute' => 'status_aktif',
                    'value' => function ($model) {
                        if ($model->status_aktif == 1) {
                            return "Aktif";
                        } else {
                            return "Tidak";
                        }
                    }
                ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
        
    </div>

</div>
