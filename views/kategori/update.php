<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kategori */

$this->title = 'Kategori : ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-update box box-primary">

	<div class="box-header">
        <h3 class="box-title">Edit Kategori : <?= $model->nama; ?>.</h3>
    </div>

    <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

    <div class="box-body">

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>

</div>
