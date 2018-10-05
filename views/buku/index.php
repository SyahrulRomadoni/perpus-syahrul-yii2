<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Penulis;
use app\models\Kategori;
use app\models\Buku;
use app\models\Penerbit;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-index box box-primary">

    <div class="box-header">
        <h3 class="box-title">Daftar Buku.</h3>
    </div>
    
    <div class="box-body">

        <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('<i class="fa fa-plus"> Tambah Buku</i>', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fa fa-print"> Export Daftar Buku ke Word</i>', ['daftar-buku-word'], ['class' => 'btn btn-info btn-flat']) ?>
            <?= Html::a('<i class="fa fa-print"> Export Daftar Buku ke Pdf</i>', ['daftar-buku-pdf'], ['class' => 'btn btn-danger btn-flat']) ?>
            <?= Html::a('<i class="fa fa-print"> Export Daftar Buku ke Excel</i>', ['daftar-buku-excel'], ['class' => 'btn btn-warning btn-flat']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'nama',
                // 'tahun_terbit',
                [
                    'attribute'=>'tahun_terbit',
                    'label'=>'Tahun<br>Terbit',
                    'encodeLabel'=>false,
                    'headerOptions'=>['style'=>'text-align:center; width: 80px'],
                    'contentOptions'=>['style'=>'text-align:center'],
                ],
                // 'id_penulis',
                [  
                    'attribute' => 'id_penulis',
                    'value' => function($data)
                    {
                        // Cara 1 Pemanggil id_*** menjadi nama.
                        //return $data->getPenulis();

                        // Cara 2 Pemanggil id_*** menjadi nama.
                        return @$data->penulis->nama;
                    },
                    'filter'=>Penulis::getList(),
                ],
                // 'id_penerbit',
                [  
                    'attribute' => 'id_penerbit',
                    'value' => function($data)
                    {
                        // Cara 1 Pemanggil id_*** menjadi nama.
                        //return $data->getPenerbit();

                        // Cara 2 Pemanggil id_*** menjadi nama.
                        return @$data->penerbit->nama;
                    },
                    'filter'=>Penerbit::getList(),
                ],
                // 'id_kategori',
                [  
                    'attribute' => 'id_kategori',
                    'value' => function($data)
                    {
                        // Cara 1 Pemanggil id_*** menjadi nama.
                        //return $data->getKategori();
                        
                        // Cara 2 Pemanggil id_*** menjadi nama.
                        return @$data->kategori->nama;
                    },
                    'filter'=>Kategori::getList(),
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
                    'headerOptions'=>['style'=>'text-align:center; width: 80px'],
                    'contentOptions'=>['style'=>'text-align:center'],
                    'value' => function ($model) {
                        if ($model->berkas != '') {
                            return '<a href="' . Yii::$app->homeUrl . '/upload/' . $model->berkas . '"><div align="center"><button class="btn btn-primary glyphicon glyphicon-download-alt" type="submit"></button></div></a>';
                        } else { 
                            return '<div align="center"><h1>No File</h1></div>';
                        }
                    }
                ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

    </div>

</div>
