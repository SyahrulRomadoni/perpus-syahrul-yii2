<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Index peminjaman admin -->
<?php if (Yii::$app->user->identity->id_user_role == 1): ?>

    <div class="peminjaman-index">

        <h1><?= Html::encode($this->title) ?></h1>
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
                    }
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
                    }
                ],
                'tanggal_pinjam',
                'tanggal_kembali',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>

<?php endif ?>

<!-- Index peminjaman anggota -->
<?php if (Yii::$app->user->identity->id_user_role == 2): ?>

    <div class="peminjaman-index">

        <h1><?= Html::encode($this->title) ?></h1>
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
                    }
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
                'tanggal_pinjam',
                'tanggal_kembali',

                //['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
    
<?php endif ?>

<!-- Index peminjaman petugas -->
<?php if (Yii::$app->user->identity->id_user_role == 3): ?>

    <div class="peminjaman-index">

        <h1><?= Html::encode($this->title) ?></h1>
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
                    }
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
                    }
                ],
                'tanggal_pinjam',
                'tanggal_kembali',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
    
<?php endif ?>