<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Anggota */

$this->title = 'Anggota: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Anggotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<!-- Update admin -->
<?php if (Yii::$app->user->identity->id_user_role == 1): ?>
<div class="anggota-update box box-primary">

	<div class="box-header">
        <h3 class="box-title">Edit Anggota : <?= $model->nama; ?>.</h3>
    </div>

    <div class="box-body">

	    <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>

</div>
<?php endif ?>

<!-- Update anggota -->
<?php if (Yii::$app->user->identity->id_user_role == 2): ?>
<div class="anggota-update box box-primary">

	<div class="box-header">
        <h3 class="box-title">Biodata Anggota : <?= $model->nama; ?>.</h3>
    </div>

    <div class="box-body">

	    <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>

</div>
<?php endif ?>

<!-- Update petugas -->
<?php if (Yii::$app->user->identity->id_user_role == 3): ?>
<div class="anggota-update box box-primary">

	<div class="box-header">
        <h3 class="box-title">Edit Anggota : <?= $model->nama; ?>.</h3>
    </div>

    <div class="box-body">

	    <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>

</div>
<?php endif ?>