<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Desire */

$this->title = 'Изменить желание: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Желания', 'url' => ['index?id='.$model->id_campaigns]];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="desire-update">
	<h1><?= Html::encode($this->title) ?></h1>
    <div class="container">
	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
    </div>

</div>
