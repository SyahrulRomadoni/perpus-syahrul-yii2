<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penerbit */

$this->title = 'Penerbit : ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Penerbits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penerbit-update box box-primary">

	<div class="box-header">
        <h3 class="box-title">Edit Penerbit : <?= $model->nama; ?>.</h3>
    </div>

    <div class="box-body">

	    <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>

</div>
