<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Petugas */

$this->title = 'Petugas';
$this->params['breadcrumbs'][] = ['label' => 'Petugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="petugas-create box box-primary">

	<div class="box-header">
        <h3 class="box-title">Tambah Petugas.</h3>
    </div>

    <div class="box-body">

	    <?php /*<h1><?= Html::encode($this->title) ?></h1>*/ ?>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
	    
	</div>

</div>
