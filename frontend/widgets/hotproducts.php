<?php 
namespace frontend\widgets;
use yii\base\Widget;
use frontend\models\Products;
use frontend\models\ImageProducts;


class hotproducts extends Widget{
	public function init(){
		parent::init();
	}
	public function run(){
           $product=new Products();
           $dataHot=$product->getHotproduct();
           //
           $imgProducts=new ImageProducts();
          return $this->render('hotproducts',[
            'dataHot'=>$dataHot,
            'imgProducts'=>$imgProducts,
          	]);
          
		
	}
}
?>