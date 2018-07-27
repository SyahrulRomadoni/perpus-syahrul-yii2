<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */

$this->title ="Buku : " . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
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
            'id_penulis',
            'id_penerbit',
            'id_kategori',
            'sinopsis:ntext',
            'sampul',
            'berkas',
        ],
    ]) ?>

</div>
