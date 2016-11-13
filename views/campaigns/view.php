<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Campaigns */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Кампании', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaigns-view">

    <div class="container">
    <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Вы уверены, что хотите удалить эту кампанию? Восстановить её будет невозможно.',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                //'id',
                'name',
                'description:ntext',
                //'id_creator',
                'name_contact',
                [
                    'attribute'=>'contact',
                    'label'=>'Контакт',
                ],
                [
                    'attribute'=>'date_created',
                    'label' => 'Дата создания',
                    'value' => Yii::$app->formatter->asDate($model->date_created)
                ],
                [
                    'attribute'=>'date_end',
                    'label' => 'Дата завершения',
                    'value' => Yii::$app->formatter->asDate($model->date_end)
                ],
                'photo',
            ],
        ]) ?>
        <?= Html::a('Желания', ['desire/index', 'id' => $id], ['class' => 'btn btn-block btn-warning btn-lg']) ?>

        <br>

    </div>
</div>