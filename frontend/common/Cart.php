<?php
// xây dựng các hàm xử lý đặt hàng , cập nhật giỏ hàng , xóa giỏ hàng 
namespace frontend\common;
use yii;
use yii\web\Session;
use yii\base\Request;
use frontend\models\Products;
use frontend\models\Sale;
use frontend\models\ImageProducts;
class Cart{
  /**
  * Thêm sản phẩm vào giỏ hàng 
  *@param $id;
  *@return session['cart']; 
  */
  public function addCart($id)
  {
  	    $session = new Session;
        $session->open();
        $cart=$session['cart'];
        //
        $products=new Products();
        $dataProcart=$products->getProductone($id);
        //
        $sale=new Sale();
        $dataSalecart= $sale->getSale($dataProcart['sale_id']);
    
        //
        $imgProducts=new ImageProducts();
        $Imgpro=$imgProducts->getImgproducts($dataProcart['id']);
        $Imgpro=current($Imgpro);

         if(!isset($session['cart']))
         {
          $cart[$id]=[
          'quantity'    =>1,
          'proId'    =>$dataProcart->id,
          'proName'  =>$dataProcart->pro_name,
          'proPrice' =>$dataProcart->pro_price,
          'sale'     =>$dataSalecart['sale_name'],
          'image'    =>$Imgpro['image']

          ];
        }
        else
        {
          if (array_key_exists($id, $cart)) {
           $cart[$id]=[
          'quantity'=>(int)$cart[$id]['quantity']+1,
          'proId'    =>$dataProcart->id,
          'proName'  =>$dataProcart->pro_name,
          'proPrice' =>$dataProcart->pro_price,
          'sale'     =>$dataSalecart['sale_name'],
          'image'    =>$Imgpro['image']

           ];
         }
         else{
          $cart[$id]=[
          'quantity'    =>1,
          'proId'    =>$dataProcart->id,
          'proName'  =>$dataProcart->pro_name,
          'proPrice' =>$dataProcart->pro_price,
          'sale'     =>$dataSalecart['sale_name'],
          'image'    =>$Imgpro['image']
          ];
        }
        
      }
      $session['cart']=$cart;
  }
 }
 ?>
