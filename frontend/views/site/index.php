<?php
use yii\web\Session;

use frontend\common\BaseHelper;
   $rewrite=new BaseHelper();
/* @var $this yii\web\View */

$this->title = 'Trang chủ';


?>
<?php  
if(!empty($dataCat)){
   foreach ($dataCat as $key => $value) {
     $dataCatpro=$products->getCatpro($value['id']);
     $dataParentpro=$products->getParentpro($value['id']);
     //ghép hai mảng $dataCatpro và $dataParentpro
     $dataProducts=array_merge($dataCatpro,$dataParentpro);
   
    if(!empty($dataProducts)){
 ?>

<div class="category-product">
       <div  class="category-product-title">
         <div class="row">
           <div class="col-md-2">
             <div class="category">
               <a href=""><?php echo $value['cat_name']; ?></a>
             </div>
           </div>
           <div class="col-md-8">
            <div class="parent">
              <ul>
              <?php 
              // Lấy ra danh mục con cấp 1
               $dataParentcat=$cat->checkSubcat($value['id']);
               $dataParentcat=array_slice( $dataParentcat, 0,5);
               foreach ($dataParentcat as $key => $valueSub) {
               ?>
                <li><a href=""><?php echo $valueSub['cat_name']; ?></a></li>
               <?php } ?>
              </ul></div>
            </div>
            <div class="col-md-2">
              <div class="more">
                <a href="#">xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
              </div>

            </div>

          </div>
        </div>
        <div class="product">
          <ul class="list-product">
          <?php 
          //danh sách sản phẩm theo danh mục cha
          
           // lấy 8 sản phẩm theo danh mục 
             $dataProducts=array_slice($dataProducts,0,8);
           foreach ( $dataProducts as $key => $pro) {
            $dataImgpro=$imgPro->getImgproducts($pro['pro_id']);
            $dataImgpro=current($dataImgpro);
           ?>
            <li>
              <div class="item-product">
               <div class="img-product">
                 <a href=""><img src="<?php echo $dataImgpro['image']; ?>" alt=""></a>
               </div>
               <?php 
                if(!$pro['sale_id']==""){
                ?>
               <span class="sale">-10%</span>
               <?php } ?>
               <div class="product-name"><a href="<?php echo $rewrite->rewriteUrl($pro['pro_id'],$pro['pro_name'],'chi-tiet-san-pham'); ?>"><?php echo $pro['pro_name']; ?></a></div>
               <div class="price">
               <?php if($pro['sale_id']==""){?>
                 <p class="price-not-sale">Giá:<?php echo number_format($pro['pro_price'])." đ" ?></p>
                 <?php 

               }else{
                  $dataSale=$sale->getSale($pro['sale_id']);
                     ?>
                  <p class="price-unline">Giá:<?php echo number_format($pro['pro_price'])." đ" ?></p>
                  <p class="price-new">Còn lại :<?php echo number_format(($pro['pro_price'])*(1-($dataSale['sale_name'])/100)).' đ' ?></p>
                     <?php
                     }
                  ?>
               </div>
               <div class="add-cart">
                <a href="javascript:void(0)" value="<?php echo $pro['pro_id']; ?>" name="<?php echo $pro['pro_name']; ?>" class="addcart">Mua Ngay</a>
              </div>
            </div>
          </li>
          <?php } ?>
        
</ul>
</div>

</div>
<?php 
        }
    }
  }
 ?>



