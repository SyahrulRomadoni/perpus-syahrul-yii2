<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'User : ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update box box-primary">

	<div class="box-header">
        <h3 class="box-title">Edit User : <?= $model->username; ?>.</h3>
    </div>

    <div class="box-body">

	    <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>

</div>
