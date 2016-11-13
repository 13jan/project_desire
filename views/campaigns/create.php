<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Campaigns */

$this->title = 'Создать кампанию';
$this->params['breadcrumbs'][] = ['label' => 'Кампании', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaigns-create">

	<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>
	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>
    </div>

</div>
