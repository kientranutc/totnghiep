<?php 
namespace frontend\widgets;
use yii\base\Widget;
use frontend\models\News;
use frontend\models\Categorynews;



class newss extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
      $catNews=new Categorynews();
      $news=new News();
      $dataCatenews=$catNews->getCatnews();
          return $this->render('newss',[
           'dataCatenews'=>$dataCatenews,
           'news'=>$news
          	]);
          
		
	}
}
?>