<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DesireSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Желания';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desire-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php $create = 'create?id='.$id_campaigns; ?>
        <?= Html::a('Создать желание', [$create], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
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

            // 'number_solved',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
