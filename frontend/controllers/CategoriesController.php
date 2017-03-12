<?php
namespace frontend\controllers;
use yii;
use frontend\models\Categories;

class CategoriesController extends \yii\web\Controller
{
    public function actionIndex()
    {   $cat=new Categories();
    	$datacat=$cat->getall();
        return $this->render('index',[
            'datacat'=>$datacat
        	]);
        
    }

    public function actionLimit()
    {
        $id=$_POST['id'];
    	$limit=Categories::getlimit($id);
        return $this->render('index',[
             'datacat'=>$limit
        	]);
    
    }

}
