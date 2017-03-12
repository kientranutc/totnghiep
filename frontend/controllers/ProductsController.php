<?php
namespace frontend\controllers;
use yii;
use frontend\models\Products;
class ProductsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    /**
    * Hiển thị chi tiết sản phẩm
    */ 
    public function actionDetailproduct()
    {
    	$id=isset($_GET['id'])?$_GET['id']:"test";
        $product=new Products();
        $dataPro=$product->getProductone($id);
    	return $this->render('detailproduct',[
             'dataPro'=>$dataPro
    		]);

    }

}
