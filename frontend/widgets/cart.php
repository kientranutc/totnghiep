<?php 
namespace frontend\widgets;
use yii\base\Widget;
use yii\web\Session;



class cart extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
     $session=new Session();
     $cartAdd=$session['cart'];
          return $this->render('cart',[
            'cartAdd'=>$cartAdd,
            
          	]);
          
		
	}
}
?>