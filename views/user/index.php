<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index box box-primary">

    <div class="box-header">
        <h3 class="box-title">Daftar User.</h3>
    </div>

    <div class="box-body">

        <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('<i class="fa fa-plus"> Tambah User</i>', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('<i class="fa fa-print"> Export Daftar User ke Word</i>', ['daftar-user'], ['class' => 'btn btn-info btn-flat']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'username',
                //'password',
                //'id_anggota',
                //'id_petugas',
                //'id_user_role',
                [  
                    'attribute' => 'id_user_role',
                    'value' => function($data)
                    {
                        return $data->getUserRole();
                    }
                ],
                'status',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {update} {resetpassword} {delete}',
                    'buttons' => [
                        'resetpassword' => function($url, $model, $key) {
                            return Html::a('<i class="fa fa-refresh"></i>', ['reset-password', 'id' => $model->id], ['data' => ['confirm' => 'Apa anda yakin ingin me reset password akun ini?'],]);
                        }
                    ]
                ],
            ],
        ]); ?>

    </div>

</div>
