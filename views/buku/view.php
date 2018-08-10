<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */

$this->title = 'Buku : ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa fa-plus"> Tambah Buku</i>', ['create'], ['class' => 'btn btn-success']) ?>
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
            'tahun_terbit',
            // [
            //     'label' => 'Nama (Tahun)',
            //     //'attribute'=>'nama',
            //     'value'=> $model->nama . '  (' . $model->tahun_terbit . ')',
            // ],
            // [
            //     'attribute'=>'tahun_terbit',
            //     'value'=> $model->tahun_terbit . '  thn',
            // ],
            // 'id_penulis',
            // 'id_penerbit',
            // 'id_kategori',
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
            'sinopsis:ntext',
            //'sampul',
            [
                'attribute' => 'sampul',
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->sampul != '') {
                        return Html::img('@web/upload/' . $model->sampul, ['class' => 'img-responsive', 'style' => 'height:500px']);
                    } else { 
                        return '<div align="center"><h1>No Image</h1></div>';
                    }
                },
            ],
            //'berkas',
            [
                'attribute' => 'berkas',
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->berkas != '') {
                        return '<a href="' . Yii::$app->homeUrl . '/upload/' . $model->berkas . '"><div align="left"><button class="btn btn-primary glyphicon glyphicon-download-alt" type="submit"></button></div></a>';
                    } else { 
                        return '<div align="left"><h1>No File</h1></div>';
                    }
                },
            ],
        ],
    ]) ?>

</div>
