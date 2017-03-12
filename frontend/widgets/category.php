<?php 
namespace frontend\widgets;
use yii\base\Widget;
use frontend\models\Categories;


class category extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
      $cat=new Categories();
      $dataCatlevel=$cat->getCatlevel();
          return $this->render('category',[
            'dataCatlevel'=>$dataCatlevel,
            'cat'=>$cat,
          	]);
          
		
	}
}
?>