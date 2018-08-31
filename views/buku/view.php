<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */

$this->title = 'Buku : ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- View buku admin -->
<?php if (Yii::$app->user->identity->id_user_role == 1): ?>
    <div class="buku-view box box-primary">

        <div class="box-header">
            <h3 class="box-title">Detail Buku : <?= $model->nama; ?>.</h3>
        </div>

        <div class="box-body">
            
            <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

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
                            // Cara pemanggilan 1 yang ada di model buku.
                            //return $data->getPenulis();

                            // Cara pemanggilan 2 yang ada di model buku.
                            return $data->penulis->nama;
                        }
                    ],
                    // 'id_penerbit',
                    [  
                        'attribute' => 'id_penerbit',
                        'value' => function($data)
                        {
                            // Cara pemanggilan 1 yang ada di model buku.
                            //return $data->getPenerbit();

                            // Cara pemanggilan 2 yang ada di model buku.
                            return $data->penerbit->nama;
                        }
                    ],
                    // 'id_kategori',
                    [  
                        'attribute' => 'id_kategori',
                        'value' => function($data)
                        {
                            // Cara pemanggilan 1 yang ada di model buku.
                            //return $data->getKategori();

                            // Cara pemanggilan 2 yang ada di model buku.
                            return $data->kategori->nama;
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

    </div>
<?php endif ?>

<!-- View buku anggota -->
<?php if (Yii::$app->user->identity->id_user_role == 2): ?>
    <div class="buku-view box box-primary">

        <div class="box-body">

            <div class="box-header">
                <h3 class="box-title"><?= $model->nama; ?>.</h3>
            </div>

            <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

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
                            // Cara pemanggilan 1 yang ada di model buku.
                            //return $data->getPenulis();

                            // Cara pemanggilan 2 yang ada di model buku.
                            return $data->penulis->nama;
                        }
                    ],
                    // 'id_penerbit',
                    [  
                        'attribute' => 'id_penerbit',
                        'value' => function($data)
                        {
                            // Cara pemanggilan 1 yang ada di model buku.
                            //return $data->getPenerbit();

                            // Cara pemanggilan 2 yang ada di model buku.
                            return $data->penerbit->nama;
                        }
                    ],
                    // 'id_kategori',
                    [  
                        'attribute' => 'id_kategori',
                        'value' => function($data)
                        {
                            // Cara pemanggilan 1 yang ada di model buku.
                            //return $data->getKategori();

                            // Cara pemanggilan 2 yang ada di model buku.
                            return $data->kategori->nama;
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
                    /*[
                        'attribute' => 'berkas',
                        'format' => 'raw',
                        'value' => function ($model) {
                            if ($model->berkas != '') {
                                return '<a href="' . Yii::$app->homeUrl . '/upload/' . $model->berkas . '"><div align="left"><button class="btn btn-primary glyphicon glyphicon-download-alt" type="submit"></button></div></a>';
                            } else { 
                                return '<div align="left"><h1>No File</h1></div>';
                            }
                        },
                    ],*/
                ],
            ]) ?>

        </div>

    </div>

    <div class="buku-view">
        <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali</button>
        <button type="button" class="btn btn-primary"><i class="fa fa-file"></i> Pinjam Buku</button>
    </div>
<?php endif ?>

<!-- View buku petugas -->
<?php if (Yii::$app->user->identity->id_user_role == 3): ?>
    <div class="buku-view box box-primary">

        <div class="box-header">
            <h3 class="box-title">Detail Buku : <?= $model->nama; ?>.</h3>
        </div>

        <div class="box-body">

            <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

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
                            // Cara pemanggilan 1 yang ada di model buku.
                            //return $data->getPenulis();

                            // Cara pemanggilan 2 yang ada di model buku.
                            return $data->penulis->nama;
                        }
                    ],
                    // 'id_penerbit',
                    [  
                        'attribute' => 'id_penerbit',
                        'value' => function($data)
                        {
                            // Cara pemanggilan 1 yang ada di model buku.
                            //return $data->getPenerbit();

                            // Cara pemanggilan 2 yang ada di model buku.
                            return $data->penerbit->nama;
                        }
                    ],
                    // 'id_kategori',
                    [  
                        'attribute' => 'id_kategori',
                        'value' => function($data)
                        {
                            // Cara pemanggilan 1 yang ada di model buku.
                            //return $data->getKategori();

                            // Cara pemanggilan 2 yang ada di model buku.
                            return $data->kategori->nama;
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

    </div>
<?php endif ?>