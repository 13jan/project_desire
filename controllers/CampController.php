<?php

namespace app\controllers;

use Yii;
use app\models\Campaigns;
use app\models\Applications;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CampController implements the CRUD actions for Campaigns model.
 */
class CampController extends Controller
{
    //public $layout = "main_old";

    /**
     * @inheritdoc
    */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'add' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Campaigns models.
     * @return mixed
     */
    public function actionIndex($p=3)
    {
        /*
        $dataProvider = new ActiveDataProvider([
            'query' => Campaigns::find(),
        ]);
        */
        //$data = Campaigns::find()->all();

        return $this->render('index', [
            'pages' => $p,
            //'data' => $data,
            //'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Campaigns model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionAdd(){

        $posts = Yii::$app->request->post();

        foreach ($posts as $post){
            if (is_numeric($post)) {

            }
        }

        return $this->render('add', [
            'test' => 1

        ]);

        /*
        $posts);


        foreach ($posts as $post){

        }

        $model = new Applications();

        */

    }


    /**
     * Finds the Campaigns model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Campaigns the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Campaigns::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
