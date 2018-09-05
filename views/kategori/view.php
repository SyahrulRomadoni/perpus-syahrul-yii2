<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kategori */

$this->title = "Kategori : " . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-view box box-primary">

    <div class="box-header">
        <h3 class="box-title">Detail Kategori : <?= $model->nama; ?>.</h3>
    </div>

    <div class="box-body">

        <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

        <p>
            <?= Html::a('<i class="fa fa-plus"> Tambah Kategori</i>', ['create'], ['class' => 'btn btn-success']) ?>
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

    <div class="box-body">

        <div class="box-header">
            <h3 class="box-title">Daftar Buku yang terkait.</h3>
        </div>

        <?= Html::a('<i class="fa fa-plus"> Tambah Buku</i>', ['buku/create', 'id_kategori' => $model->id], ['class' => 'btn btn-success']) ?>
        <div>&nbsp;</div>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>&nbsp;</th>
            </tr>
            <?php $no=1; foreach ($model->findAllBuku() as $buku): ?>
            <tr>
                <td><?= $no; ?></td>
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