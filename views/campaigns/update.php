<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Campaigns */

$this->title = 'Изменить кампанию: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Кампании', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="campaigns-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
