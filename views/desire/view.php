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

    <div class="container">
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

    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Резервирование</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-striped">
            <tr>
              <th style="width: 10px">#</th>
              <th>Пользователь</th>
              <th>Зарезервировал</th>
              <th>Выполнил</th>
              <th> </th>
            </tr>
            <tr>
              <td>1</td>
              <td><a href="/ссылка-на-пользователя">Алексей</a></td>
              <td>10</td>
              <td><input class="form-control" type="number" max="10" min="0" value="10" disabled></td>
              <td><button class="btn btn-sm btn-success" disabled>Подтвердить</button></td>
            </tr>
            <tr>
              <td>2</td>
              <td><a href="/ссылка-на-пользователя">Владимир</a></td>
              <td>5</td>
              <td><input class="form-control" type="number" max="5" min="0" value="0"></td>
              <td><button class="btn btn-sm btn-success">Подтвердить</button></td>
            </tr>
            <tr>
              <td>3</td>
              <td><a href="/ссылка-на-пользователя">Юлия</a></td>
              <td>5</td>
              <td><input class="form-control" type="number" max="5" min="0" value="0"></td>
              <td><button class="btn btn-sm btn-success">Подтвердить</button></td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>


    </div>
</div>
