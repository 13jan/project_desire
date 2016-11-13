<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Campaigns */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaigns-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?//= $form->field($model, 'id_creator')->textInput() ?>

    <?= $form->field($model, 'name_contact')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

    <? //= $form->field($model, 'date_created')->textInput() ?>

    <?//= $form->field($model, 'date_end_display')->textInput() ?>


    <?= $form->field($model, 'date_end_display')->widget(DatePicker::className(),[
        'name' => 'check_issue_date',
        'value' => date('mm/dd/yyyy', strtotime('+2 days')),
        'options' => ['placeholder' => 'Выберите дату завершения кампании'],
        'pluginOptions' => [
            'format' => 'mm/dd/yyyy',
            'todayHighlight' => true,
        ],
    ]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>
	
	<?//= $form->field($model, 'photo')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
