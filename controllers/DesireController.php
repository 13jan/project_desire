<?php

namespace app\controllers;

use Yii;
use app\models\Desire;
use app\models\DesireSearch;
use app\models\Campaigns;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DesireController implements the CRUD actions for Desire model.
 */
class DesireController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    /**
     * Lists all Desire models.
     * @return mixed
     * @param integer $id
     */
    public function actionIndex($id)
    {

        if(Yii::$app->user->isGuest){
            return $this->redirect(['/']);
        }

        $searchModel = new DesireSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);

        //Desire::find()->where(['id_campaigns' => 123]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'id_campaigns' => $id,
        ]);
    }

    /**
     * Displays a single Desire model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Desire model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionCreate($id)
    {
        if(Yii::$app->user->isGuest){
            return $this->redirect(['/']);
        }

        $my_user_id = Yii::$app->user->getId();

        $myModel = Campaigns::findOne($id);

        $id_user = $myModel->id_creator;

        if($id_user != $my_user_id){
            return $this->redirect(['/campaigns']);
        }

        $model = new Desire();

        $model->id_campaigns = $id;

        $model->number_solved = 0;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Desire model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->isGuest){
            return $this->redirect(['/']);
        }

        $my_user_id = Yii::$app->user->getId();

        $myModel = Campaigns::findOne($id);

        $id_user = $myModel->id_creator;

        if($id_user != $my_user_id){
            return $this->redirect(['/campaigns']);
        }

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Desire model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {

        if(Yii::$app->user->isGuest){
            return $this->redirect(['/']);
        }

        $my_user_id = Yii::$app->user->getId();

        $myModel = Campaigns::findOne($id);

        $id_user = $myModel->id_creator;

        if($id_user != $my_user_id){
            return $this->redirect(['/campaigns']);
        }

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Desire model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Desire the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Desire::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
