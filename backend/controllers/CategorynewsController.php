<?php

namespace backend\controllers;

use Yii;
use backend\models\Categorynews;
use backend\models\CategorynewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategorynewsController implements the CRUD actions for Categorynews model.
 */
class CategorynewsController extends Controller
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
     * Lists all Categorynews models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorynewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Categorynews model.
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
     * Creates a new Categorynews model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {  
       date_default_timezone_set("Asia/Ho_Chi_Minh");
       $create_at=date("Y-m-d h:i:s");
        $model = new Categorynews();
        $model->created_at=$create_at;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Categorynews model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {    
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $update_at=date("Y-m-d h:i:s");
        $model = $this->findModel($id);
        $model->updated_at=$update_at;
   
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Categorynews model.
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
     * Finds the Categorynews model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Categorynews the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Categorynews::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function  actionAlldelete()
    {
        session_start();
        $model=new Categorynews();
       $check=$model->deleteAll();
       if($check)
       {
        $_SESSION['success_cat_new']="Xóa Thành Công";
       return $this->redirect(['index']);
       }
       else
       {        
        $_SESSION['error_cat_new']="Xóa lỗi";

        return $this->redirect(['index']);
       }
    }
}
