<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\file\FileInput;
use app\models\Penulis;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-plus"> Tambah Buku</i>', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-print"> Export Daftar Buku ke Word</i>', ['daftar-buku'], ['class' => 'btn btn-info btn-flat']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nama',
            'tahun_terbit',
            // 'id_penulis',
            [  
                'attribute' => 'id_penulis',
                'value' => function($data)
                {
                    return $data->getPenulis();
                }
            ],
            // 'id_penerbit',
            [  
                'attribute' => 'id_penerbit',
                'value' => function($data)
                {
                    return $data->getPenerbit();
                }
            ],
            // 'id_kategori',
            [  
                'attribute' => 'id_kategori',
                'value' => function($data)
                {
                    return $data->getKategori();
                }
            ],
            //'sinopsis:ntext',
            [
                'attribute' => 'sampul',
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->sampul != '') {
                        return Html::img('@web/upload/' . $model->sampul, ['class' => 'img-responsive', 'style' => 'height:100px']);
                    } else { 
                        return '<div align="center"><h1>No Image</h1></div>';
                    }
                },
            ],
            [
                'attribute' => 'berkas',
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->berkas != '') {
                        return '<a href="' . Yii::$app->homeUrl . '/upload/' . $model->berkas . '"><div align="center"><button class="btn btn-primary glyphicon glyphicon-download-alt" type="submit"></button></div></a>';
                    } else { 
                        return '<div align="center"><h1>No File</h1></div>';
                    }
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
