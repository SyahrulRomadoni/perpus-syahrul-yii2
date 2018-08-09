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

$this->title = 'Perpustakaan Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <p>Jumlah Buku</p>

                <h3><?= Yii::$app->formatter->asInteger(Buku::getCount()); ?></h3>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="<?=Url::to(['buku/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
            <div class="inner">
                <p>Jumlah Kategori</p>

                <h3><?= Yii::$app->formatter->asInteger(Kategori::getCount()); ?></h3>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="<?=Url::to(['kategori/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <p>Jumlah Penerbit</p>

                <h3><?= Yii::$app->formatter->asInteger(Penerbit::getCount()); ?></h3>
            </div>
            <div class="icon">
                <i class="fa fa-building"></i>
            </div>
            <a href="<?=Url::to(['penerbit/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <p>Jumlah Penulis</p>

                <h3><?= Yii::$app->formatter->asInteger(Penulis::getCount()); ?></h3>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="<?=Url::to(['penulis/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <p>Jumlah Anggota</p>

                <h3><?= Yii::$app->formatter->asInteger(Anggota::getCount()); ?></h3>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="<?=Url::to(['anggota/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
            <div class="inner">
                <p>Jumlah Petugas</p>

                <h3><?= Yii::$app->formatter->asInteger(Petugas::getCount()); ?></h3>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="<?=Url::to(['petugas/index']);?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Buku Berdasarkan Kategori</h3>
            </div>
            <div class="box-body">
                <?=Highcharts::widget([
                'options' => [
                    'credits' => false,
                    'title' => ['text' => 'KATEGORI BUKU'],
                    'exporting' => ['enabled' => true],
                    'plotOptions' => [
                        'pie' => [
                            'cursor' => 'pointer',
                        ],
                    ],
                    'series' => [
                        [
                            'type' => 'pie',
                            'name' => 'Kategori',
                            'data' => Kategori::getGrafikList(),
                        ],
                    ],
                ],
            ]);?>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Buku Berdasarkan Penerbit</h3>
            </div>
            <div class="box-body">
                <?=Highcharts::widget([
                'options' => [
                    'credits' => false,
                    'title' => ['text' => 'PENERBIT BUKU'],
                    'exporting' => ['enabled' => true],
                    'plotOptions' => [
                        'pie' => [
                            'cursor' => 'pointer',
                        ],
                    ],
                    'series' => [
                        [
                            'type' => 'pie',
                            'name' => 'Penerbit',
                            'data' => Penerbit::getGrafikList(),
                        ],
                    ],
                ],
            ]);?>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Buku Berdasarkan Penulis</h3>
            </div>
            <div class="box-body">
                <?=Highcharts::widget([
                'options' => [
                    'credits' => false,
                    'title' => ['text' => 'PENULIS BUKU'],
                    'exporting' => ['enabled' => true],
                    'plotOptions' => [
                        'pie' => [
                            'cursor' => 'pointer',
                        ],
                    ],
                    'series' => [
                        [
                            'type' => 'pie',
                            'name' => 'Penulis',
                            'data' => Penulis::getGrafikList(),
                        ],
                    ],
                ],
            ]);?>
            </div>
        </div>
    </div>

</div>