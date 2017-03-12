<?php

namespace backend\controllers;

use Yii;
use backend\models\Products;
use backend\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Sale;
use backend\models\ImageProducts;
use backend\models\Categories;
use yii\helpers\ArrayHelper;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
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
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {   
        $model = new Products();
        $sale=new Sale();
        $datasale=$sale->getall();
         $datasale=ArrayHelper::map($datasale,'id', 'sale_name');
         // 
           $cat = new Categories();
        $datacate=$cat->getallcat();
        $dropdownlist=$cat->showCategories($datacate);
         // 
           date_default_timezone_set("Asia/Ho_Chi_Minh");
        $created=date("Y-m-d h:i:s");
        $model->created_at= $created;

          if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
        Yii::$app->response->format = Response::FORMAT_JSON;
        return ActiveForm::validate($model);
    }
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if($model->save())
            {   $image_id=$model->id;
                $postimage=Yii::$app->request->post('imagepro');
              
               foreach ($postimage as $value) {
                  $image=new ImageProducts();
                $image->pro_id=$image_id;
                $image->image=$value;
                $image->status=1;
              $image->save(false);  
               }
                
                
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'datasale'=>$datasale,
                'dropdownlist'=>$dropdownlist,
            ]);
        }
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $sale=new Sale();
        $imagepro=new ImageProducts();
        $dataimage=$imagepro->getimage($id);

        $datasale=$sale->getall();
        $datasale=ArrayHelper::map($datasale,'id', 'sale_name');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $updated_at=date("Y-m-d h:i:s");
        $model->updated_at= $updated_at;

        // 
        $cat = new Categories();
        $datacate=$cat->getallcat();
        $dropdownlist=$cat->showCategories($datacate);
         if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
        Yii::$app->response->format = Response::FORMAT_JSON;
        return ActiveForm::validate($model);
    }
        if ($model->load(Yii::$app->request->post()) && $model->save() &&$model->validate()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'datasale'=>$datasale,
                'dropdownlist'=>$dropdownlist,
                'dataimage'=>$dataimage

            ]);
        }
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionDeleteall()
    {
        if(isset($_POST["selection"]))
        {
           $select=$_POST["selection"];
           foreach ($select as $key => $value) {
              $this->findModel($value)->delete();  
           }
           return $this->redirect(['index']);
        }
    }
}
