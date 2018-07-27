<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kategori */

$this->title = "Kategori : " . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-view">

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
            'id',
            'nama',
        ],
    ]) ?>

</div>

<div>&nbsp;</div>

<h1>Daftar Buku.</h1>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Buku</th>
        <th>&nbsp;</th>
    </tr>
    <?php $no=1; foreach ($model->findAllBuku() as $buku): ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $buku->nama; ?></td>
        <td>
            <?= Html::a("Edit",["buku/update","id"=>$buku->id],['class' => 'btn btn-primary']) ?>&nbsp;
            <?= Html::a("Hapus",["buku/delete","id"=>$buku->id],['class' => 'btn btn-danger', 'data-method' => 'post', 'data-confirm' => 'Yakin hapus data ini?']) ?>&nbsp;
        </td>
    </tr>
    <?php $no++; endforeach ?>
</table>
