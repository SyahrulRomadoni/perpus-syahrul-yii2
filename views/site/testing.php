<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use miloschuman\highcharts\Highcharts;
use app\models\Buku;
use app\models\Kategori;
use app\models\Penerbit;
use app\models\Penulis;
use app\models\Anggota;
use app\models\Petugas;
use app\models\User;
use app\models\Peminjaman;

$this->title = 'Perpustakaan Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">

    <!-- ./col -->
    <div class="col-lg-12 col-xs-12">
        <p>
            <?= Html::a('<i class="fa fa-print"> Test ke Word S</i>', ['test-word-s'], ['class' => 'btn btn-info btn-flat']) ?>
            <?= Html::a('<i class="fa fa-print"> Test ke Word SS</i>', ['test-word-ss'], ['class' => 'btn btn-info btn-flat']) ?>
            <?= Html::a('<i class="fa fa-print"> Test ke Excel</i>', ['test-excel'], ['class' => 'btn btn-info btn-flat']) ?>
        </p>
    </div>

</div>