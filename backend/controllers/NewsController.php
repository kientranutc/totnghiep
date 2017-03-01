<?php

namespace backend\controllers;

use Yii;
use backend\models\News;
use backend\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Categorynews;
use yii\helpers\ArrayHelper;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
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
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
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
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();
        $cat_news=new Categorynews();
        $datacatnews=$cat_news->getcatnews();
        $datacatnews=ArrayHelper::map($datacatnews,'id','cat_name_news');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $created=date("Y-m-d h:i:s");
        $model->created_at= $created;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'datacatnews'=>$datacatnews
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
           $cat_news=new Categorynews();
        $datacatnews=$cat_news->getcatnews();
        $datacatnews=ArrayHelper::map($datacatnews,'id','cat_name_news');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $update_at=date("Y-m-d h:i:s");
        $model->update_at=$update_at;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'datacatnews'=>$datacatnews
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
         if (!Yii::$app->request->isAjax) {
        return $this->redirect(['index']);
       }
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
   /*
    *id interger
    *return array()
   */
    public function actionDeleteselect()
    {
        if(isset($_POST["selection"]))
        {
           $select=$_POST["selection"];
           foreach ($select as $key => $value) {
              $this->findModel($value)->delete();
               return $this->redirect(['index']);
           }
        }
    }
}
