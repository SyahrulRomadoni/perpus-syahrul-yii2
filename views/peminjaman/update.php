<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */

$this->title = 'Peminjaman : ' . $model->buku->nama;
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peminjaman-update box box-primary">

	<div class="box-header">
        <h3 class="box-title">Edit Peminjaman Buku : <?= $model->buku->nama; ?>.</h3>
    </div>

    <div class="box-body">

		<?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

		<?= $this->render('_form', [
		    'model' => $model,
		]) ?>

	</div>

</div>
