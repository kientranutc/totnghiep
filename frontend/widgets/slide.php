<?php 
namespace frontend\widgets;
use yii\base\Widget;
use frontend\models\Slideshow;


class slide extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
      $slide=new Slideshow();
      $dataSlide=$slide->getSlideshow();
     return $this->render('slide',[
          'dataSlide'=>$dataSlide,
          	]);
          
		
	}
}
?>