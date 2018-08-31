<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penulis */

$this->title = "Penulis : " . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Penulis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Penulis : <?= $model->nama; ?></h3>
    </div>

    <div class="box-body">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('<i class="fa fa-plus"> Tambah Penulis</i>', ['create'], ['class' => 'btn btn-success']) ?>
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
                'alamat:ntext',
                'telepon',
                'email:email',
                [
                    'label' => 'Jumlah Buku',
                    'value' => $model->getJumlahBuku()
                ],
            ],
        ]) ?>

    </div>

</div>

<div>&nbsp;</div>

<div class="box box-primary">

    <div class="box-header">
        <h3 class="box-title">Daftar Buku yang terkait.</h3>
    </div>
    
    <div class="box-body">

        <?= Html::a('<i class="fa fa-plus"> Tambah Buku</i>', ['buku/create', 'id_penulis' => $model->id], ['class' => 'btn btn-success']) ?>
        <div>&nbsp;</div>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>&nbsp;</th>
            </tr>
            <?php $no=1; ?>
            <?php $semuaBuku = $model->findAllBuku(); ?>
            <?php foreach ($semuaBuku as $buku): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= Html::a($buku->nama, ['buku/view', 'id' => $buku->id]); ?></td>
                <td>
                    <?= Html::a("<i class='fa fa-pencil'> Edit</i>",["buku/update","id"=>$buku->id],['class' => 'btn btn-primary']) ?>&nbsp;
                    <?= Html::a("<i class='fa fa-trash'> Hapus</i>",["buku/delete","id"=>$buku->id],['class' => 'btn btn-danger', 'data-method' => 'post', 'data-confirm' => 'Yakin hapus data ini?']) ?>&nbsp;
                </td>
            </tr>
            <?php $no++; endforeach ?>
        </table>

    </div>

</div>