<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserRole */

$this->title = 'Kategori User';
$this->params['breadcrumbs'][] = ['label' => 'User Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-role-create box box-primary">

	<div class="box-header">
        <h3 class="box-title">Tambah Kategori User.</h3>
    </div>

    <div class="box-body">

	    <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>

</div>
