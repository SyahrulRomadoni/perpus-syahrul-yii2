<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */

$this->title = 'Peminjaman : ' . $model->buku->nama;
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Peminjaman Buku : <?= $model->buku->nama; ?>.</h3>
    </div>

    <div class="box-body">

        <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

        <p>
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
            ],
        ]) ?>

    </div>

</div>