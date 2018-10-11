<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'User : ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<!-- Update admin -->
<?php if (Yii::$app->user->identity->id_user_role == 1): ?>

<?php $this->title = 'Admin : ' . $model->username; ?>

<div class="user-update box box-primary">

	<div class="box-header">
        <h3 class="box-title">Profile Admin : <?= $model->username; ?>.</h3>
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

<?php $this->title = 'Anggota : ' . $model->username; ?>

<div class="user-update box box-primary">

	<div class="box-header">
        <h3 class="box-title">Profile Anggota : <?= $model->username; ?>.</h3>
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

<?php $this->title = 'Petugas : ' . $model->username; ?>

<div class="user-update box box-primary">

	<div class="box-header">
        <h3 class="box-title">Profile Petugas : <?= $model->username; ?>.</h3>
    </div>

    <div class="box-body">

	    <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>

</div>
<?php endif ?>