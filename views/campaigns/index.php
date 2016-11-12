<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampaignsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мои кампании';
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="inner-headline">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="pageTitle"><?= Html::encode($this->title) ?></h2>
        </div>
    </div>

</div>
</section>
<br><br>
<div class="container">
    <div class="campaigns-index">

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Создать кампанию', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                [
                    'attribute'=>'name',
                    'label'=>'Название кампании',
                ],
                'description:ntext',

                'name_contact',
                // 'contact',
                // 'date_created',
                // 'date_end',
                // 'photo',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>