<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Campaigns */


$desires = (new \yii\db\Query())
    ->from('desire')
    ->where(['id_campaigns' => $model->id])
    ->all();

?>


<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Страница кампании <strong><?=$model->name?></strong></h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="about">
            <section class="features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <img src="/<?=$model->photo?>" alt="" style="width: 100%;">
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-horizontal" action="/camp/add" method="post">
                                    <div class="box-body">
                                        <h3 class="box-title"><?=$model->name?></h3>
                                        <div class="" style="background-image: url(/img/orange.png);display: inline-block;width: 239px;height: 40px;padding: 10px;margin: 0 auto; text-align: center; color: #fff; font-size: 18px;font-weight: 700;">
                                            5 выполнено
                                        </div>
                                        <div class="" style="background-image: url(/img/blue.png);display: inline-block;width: 239px;height: 40px;padding: 10px;margin: 0 auto; text-align: center; color: #fff; font-size: 18px;font-weight: 700;">
                                            10 ещё требуется
                                        </div><br><br>
                                        <p style="overflow: hidden;text-overflow:ellipsis; height: 150px;">
                                            <?=$model->description?>
                                        </p>

                                        <!-- table start -->
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Желания</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body no-padding">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th style="width: 10px">#</th>
                                                        <th>Желание</th>
                                                        <th>Комментарий</th>
                                                        <th>Всего требуется</th>
                                                        <th>Зарезервировано</th>
                                                        <th>Выполнено</th>
                                                        <th>Процент завершения</th>
                                                        <th style="width: 40px">Label</th>
                                                        <th>Зарезервировать</th>
                                                    </tr>

                                                <?php
                                                $i = 1;
                                                foreach($desires as $item): ?>
                                                    <tr>
                                                        <td><?=$i?></td>
                                                        <td><?=$item["name"]?></td>
                                                        <td><?=$item["comment"]?></td>
                                                        <td><?=$item["number"]?></td>
                                                        <td>1!</td>
                                                        <td>1!</td>
                                                        <td>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar progress-bar-primary progress-bar-striped" style="width: 50%"></div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge bg-red">50%</span></td>
                                                        <td><input class="form-control" type="number" name="count_<?=$item["id"]?>" max="<?=$item["number"]?>" min="0" value="0"></td>
                                                    </tr>
                                                <?php endforeach; ?>

                                                    <?php  /*


                                                    <tr>
                                                        <td>2</td>
                                                        <td>Куклы</td>
                                                        <td>для Кати и Поли, 3 года</td>
                                                        <td>10</td>
                                                        <td>2</td>
                                                        <td>7</td>
                                                        <td>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar progress-bar-primary progress-bar-striped" style="width: 70%"></div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge bg-red">70%</span></td>
                                                        <td><input class="form-control" type="number" max="3" min="0" value="0"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Тетрадки</td>
                                                        <td>для всех</td>
                                                        <td>500</td>
                                                        <td>0</td>
                                                        <td>500</td>
                                                        <td>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar progress-bar-primary progress-bar-striped" style="width: 100%"></div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge bg-red">100%</span></td>
                                                        <td><input class="form-control" type="number" max="0" min="0" value="0" disabled></td>
                                                    </tr>
                                                            */ ?>
                                                </table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- table end -->
                                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <span class="direct-chat-timestamp pull-left" style="font-size: 16px;">до 15.11.2016</span>
                                        <button type="submit" class="btn btn-info pull-right">Сохранить</button>
                                    </div>
                                    <!-- /.box-footer -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
