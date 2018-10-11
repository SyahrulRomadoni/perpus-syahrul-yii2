<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Buku;
use app\models\Anggota;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Index peminjaman admin -->
<?php if (Yii::$app->user->identity->id_user_role == 1): ?>

    <div class="peminjaman-index box box-primary">

        <div class="box-header">
            <h3 class="box-title">Daftar Peminjaman Buku.</h3>
        </div>

        <div class="box-body">

            <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a('<i class="fa fa-plus"> Tambah Peminjaman</i>', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'id',
                    //'id_buku',
                    [  
                        'attribute' => 'id_buku',
                        'value' => function($data)
                        {
                            // Cara 1 Pemanggil id_*** menjadi nama.
                            //return $data->getPenulis();

                            // Cara 2 Pemanggil id_*** menjadi nama.
                            return $data->buku->nama;
                        },
                        'filter'=>Buku::getList(),
                    ],
                    //'id_anggota',
                    [  
                        'attribute' => 'id_anggota',
                        'value' => function($data)
                        {
                            // Cara 1 Pemanggil id_*** menjadi nama.
                            //return $data->getPenulis();

                            // Cara 2 Pemanggil id_*** menjadi nama.
                            return $data->anggota->nama;
                        },
                        'filter'=>Anggota::getList(),
                    ],
                    //'tanggal_pinjam',
                    [
                        'attribute'=>'tanggal_pinjam',
                        'filter'=>DatePicker::widget([
                            'model'=>$searchModel,
                            'attribute'=>'tanggal_pinjam',
                            'pluginOptions'=>[
                                'format' => 'yyyy-mm-dd'
                            ]
                        ])
                    ],
                    // [
                    //     'attribute' => 'tanggal_pinjam',
                    //     'format'=> ['DateTime','php: Y / F / d - D'],
                    // ],
                    //'tanggal_kembali',
                    [
                        'attribute'=>'tanggal_kembali',
                        'filter'=>DatePicker::widget([
                            'model'=>$searchModel,
                            'attribute'=>'tanggal_kembali',
                            'pluginOptions'=>[
                                'format' => 'yyyy-mm-dd'
                            ]
                        ])
                    ],
                    // [
                    //     'attribute' => 'tanggal_kembali',
                    //     'format'=> ['DateTime','php: Y / F / d - D'],
                    // ],
                    //'status_buku',
                    [
                        'attribute' => 'status_buku',
                        'value' => function ($model) {
                            if ($model->status_buku == 0) {
                                return "Belum Di Kembalikan";
                            };
                            if ($model->status_buku == 1) {
                                return "Masi Di Pinjam";
                            };
                            if ($model->status_buku == 2) {
                                return "Sudah Di Kembalikan";
                            };
                        },
                        'filter'=>[
                            0 => 'Belum Di Kembalikan',
                            1 => 'Masi Di Pinjam',
                            2 => 'Sudah Di Kembalikan',
                        ],
                    ],
                    //'tanggal_pengembalian_buku',
                    [
                        'attribute'=>'tanggal_pengembalian_buku',
                        'filter'=>DatePicker::widget([
                            'model'=>$searchModel,
                            'attribute'=>'tanggal_pengembalian_buku',
                            'pluginOptions'=>[
                                'format' => 'yyyy-mm-dd'
                            ]
                        ])
                    ],

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

        <div class="box-body">

    </div>

<?php endif ?>

<!-- Index peminjaman anggota -->
<?php if (Yii::$app->user->identity->id_user_role == 2): ?>

    <div class="peminjaman-index box box-primary">

        <div class="box-header">
            <h3 class="box-title">Daftar Peminjaman Buku.</h3>
        </div>

        <div class="box-body">

            <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?php /*
            <p>
                <?= Html::a('<i class="fa fa-plus"> Tambah Peminjaman</i>', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            */ ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'id',
                    //'id_buku',
                    [  
                        'attribute' => 'id_buku',
                        'value' => function($data)
                        {
                            // Cara 1 Pemanggil id_*** menjadi nama.
                            //return $data->getPenulis();

                            // Cara 2 Pemanggil id_*** menjadi nama.
                            return $data->buku->nama;
                        },
                        'filter'=>Buku::getList(),
                    ],
                    //'id_anggota',
                    /*[  
                        'attribute' => 'id_anggota',
                        'value' => function($data)
                        {
                            // Cara 1 Pemanggil id_*** menjadi nama.
                            //return $data->getPenulis();

                            // Cara 2 Pemanggil id_*** menjadi nama.
                            return $data->anggota->nama;
                        }
                    ],*/
                    //'tanggal_pinjam',
                    [
                        'attribute'=>'tanggal_pinjam',
                        'filter'=>DatePicker::widget([
                            'model'=>$searchModel,
                            'attribute'=>'tanggal_pinjam',
                            'pluginOptions'=>[
                                'format' => 'yyyy-mm-dd'
                            ]
                        ])
                    ],
                    // [
                    //     'attribute' => 'tanggal_pinjam',
                    //     'format'=> ['DateTime','php: Y / F / d - D'],
                    // ],
                    //'tanggal_kembali',
                    [
                        'attribute'=>'tanggal_kembali',
                        'filter'=>DatePicker::widget([
                            'model'=>$searchModel,
                            'attribute'=>'tanggal_kembali',
                            'pluginOptions'=>[
                                'format' => 'yyyy-mm-dd'
                            ]
                        ])
                    ],
                    // [
                    //     'attribute' => 'tanggal_kembali',
                    //     'format'=> ['DateTime','php: Y / F / d - D'],
                    // ],
                    [
                        'attribute' => 'status_buku',
                        'value' => function ($model) {
                            if ($model->status_buku == 0) {
                                return "Belum Di Kembalikan";
                            };
                            if ($model->status_buku == 1) {
                                return "Masi Di Pinjam";
                            };
                            if ($model->status_buku == 2) {
                                return "Sudah Di Kembalikan";
                            };
                        },
                        'filter'=>[
                            0 => 'Belum Di Kembalikan',
                            1 => 'Masi Di Pinjam',
                            2 => 'Sudah Di Kembalikan',
                        ],
                    ],
                    //'tanggal_pengembalian_buku',
                    [
                        'attribute'=>'tanggal_pengembalian_buku',
                        'filter'=>DatePicker::widget([
                            'model'=>$searchModel,
                            'attribute'=>'tanggal_pengembalian_buku',
                            'pluginOptions'=>[
                                'format' => 'yyyy-mm-dd'
                            ]
                        ])
                    ],

                    //['class' => 'yii\grid\ActionColumn'],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{kembalikan}',
                        'buttons' => [
                            'kembalikan' => function($url, $model, $key) {
                                return Html::a('<i class="fa fa-book"></i>', ['kembalikan-buku', 'id' => $model->id], ['data' => ['confirm' => 'Apa anda yakin ingin mengembalikan Buku ini?'],]);
                            }
                        ]
                    ],
                ],
            ]); ?>

        </div>

    </div>
    
<?php endif ?>

<!-- Index peminjaman petugas -->
<?php if (Yii::$app->user->identity->id_user_role == 3): ?>

    <div class="peminjaman-index box box-primary">

        <div class="box-header">
            <h3 class="box-title">Daftar Peminjaman Buku.</h3>
        </div>

        <div class="box-body">

            <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a('<i class="fa fa-plus"> Tambah Peminjaman</i>', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'id',
                    //'id_buku',
                    [  
                        'attribute' => 'id_buku',
                        'value' => function($data)
                        {
                            // Cara 1 Pemanggil id_*** menjadi nama.
                            //return $data->getPenulis();

                            // Cara 2 Pemanggil id_*** menjadi nama.
                            return $data->buku->nama;
                        },
                        'filter'=>Buku::getList(),
                    ],
                    //'id_anggota',
                    [  
                        'attribute' => 'id_anggota',
                        'value' => function($data)
                        {
                            // Cara 1 Pemanggil id_*** menjadi nama.
                            //return $data->getPenulis();

                            // Cara 2 Pemanggil id_*** menjadi nama.
                            return $data->anggota->nama;
                        },
                        'filter'=>Anggota::getList(),
                    ],
                    //'tanggal_pinjam',
                    [
                        'attribute'=>'tanggal_pinjam',
                        'filter'=>DatePicker::widget([
                            'model'=>$searchModel,
                            'attribute'=>'tanggal_pinjam',
                            'pluginOptions'=>[
                                'format' => 'yyyy-mm-dd'
                            ]
                        ])
                    ],
                    // [
                    //     'attribute' => 'tanggal_pinjam',
                    //     'format'=> ['DateTime','php: Y / F / d - D'],
                    // ],
                    //'tanggal_kembali',
                    [
                        'attribute'=>'tanggal_kembali',
                        'filter'=>DatePicker::widget([
                            'model'=>$searchModel,
                            'attribute'=>'tanggal_kembali',
                            'pluginOptions'=>[
                                'format' => 'yyyy-mm-dd'
                            ]
                        ])
                    ],
                    // [
                    //     'attribute' => 'tanggal_kembali',
                    //     'format'=> ['DateTime','php: Y / F / d - D'],
                    // ],
                    [
                        'attribute' => 'status_buku',
                        'value' => function ($model) {
                            if ($model->status_buku == 0) {
                                return "Belum Di Kembalikan";
                            };
                            if ($model->status_buku == 1) {
                                return "Masi Di Pinjam";
                            };
                            if ($model->status_buku == 2) {
                                return "Sudah Di Kembalikan";
                            };
                        },
                        'filter'=>[
                            0 => 'Belum Di Kembalikan',
                            1 => 'Masi Di Pinjam',
                            2 => 'Sudah Di Kembalikan',
                        ],
                    ],
                    //'tanggal_pengembalian_buku',
                    [
                        'attribute'=>'tanggal_pengembalian_buku',
                        'filter'=>DatePicker::widget([
                            'model'=>$searchModel,
                            'attribute'=>'tanggal_pengembalian_buku',
                            'pluginOptions'=>[
                                'format' => 'yyyy-mm-dd'
                            ]
                        ])
                    ],

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

        </div>

    </div>
    
<?php endif ?>