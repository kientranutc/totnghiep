<?php

namespace frontend\controllers;
use yii;
use frontend\common\Cart;
use yii\base\Request;

class ShopcartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAddcart()
    {
        $id=$_POST['id'];
     $cart=new Cart();
     $cart->addCart($id);
     return $this->render('index');

    }

}
