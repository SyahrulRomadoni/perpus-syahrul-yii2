<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Anggota */

$this->title = 'Anggota';
$this->params['breadcrumbs'][] = ['label' => 'Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-create box box-primary">

	<div class="box-header">
        <h3 class="box-title">Tambah Anggota.</h3>
    </div>

    <div class="box-body">

	    <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>

</div>
