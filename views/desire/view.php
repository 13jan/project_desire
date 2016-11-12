<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Desire */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Желание', 'url' => ['index?id='.$model->id_campaigns]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desire-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'name',
			[ 
				'attribute'=>'name', 
				'label'=>'Название кампании', 
			], 
            //'number',
			[ 
				'attribute'=>'number', 
				'label'=>'Количество', 
			], 
            //'comment:ntext',
			[ 
				'attribute'=>'comment', 
				'label'=>'Описание', 
			],
        ],
    ]) ?>

</div>
