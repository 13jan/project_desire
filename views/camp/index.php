<?php

use yii\helpers\Html;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $data */

$this->title = 'Campaigns';
$this->params['breadcrumbs'][] = $this->title;



$rows = (new \yii\db\Query())
    ->from('campaigns')
    ->limit($pages)
    ->all();

?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Кампании</h2>
            </div>
        </div>
    </div>
</section>



<section id="content">

    <?php// Pjax::begin(); ?>
    
    <div class="container">
        <div id="products" class="row list-group">

            <?php foreach($rows as $item): ?>

            <div class="item col-xs-4 col-lg-4">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <img src="/<?=$item["photo"]?>" alt="">
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <h3 class="box-title"><?=$item["name"]?></h3>
                            <p style="overflow: hidden;text-overflow:ellipsis; height: 150px;"><?=$item["description"]?></p>
                            <p><span class="badge bg-yellow" style="font-size: 16px;font-weight: 100;">выполнено 3 из 15</span></p>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <span class="direct-chat-timestamp pull-left" style="font-size: 16px;">до 15.11.2016</span>
                            <button type="submit" class="btn btn-info pull-right">Подробнее</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>

            <?php endforeach; ?>

            </div>
        </div>



    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-offset-4 col-lg-4" style="margin-top: 50px;">
                <?= Html::a('Обновить', ['camp/index', 'p' => $pages+3], ['class' => 'btn btn-block btn-warning btn-lg']) ?>
        </div>
    </div>
</section>

<?php// Pjax::end(); ?>


</div>
