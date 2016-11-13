<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Desire */

$this->title = 'Добавить желание';
$this->params['breadcrumbs'][] = ['label' => 'Желания', 'url' => ['index?id='.$model->id_campaigns]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desire-create">

	<div class="container">
	<h1><?= Html::encode($this->title) ?></h1>

	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>

	</div>
</div>