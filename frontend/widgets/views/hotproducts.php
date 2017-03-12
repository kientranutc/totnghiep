<div class="hot-product-title">
      <h4>Sản phẩm Nổi bật</h4>
    </div> 
    <div class="hot-product-content">
     <ul>
     <?php 
       if(!empty($dataHot))
       {
        foreach ($dataHot as $key => $value) {
          $dataImg=$imgProducts->getImgproducts($value['id']);
          $imgFirstpro=current($dataImg);
        ?>
       <li><a href="#">
         <div class="inner-hot-product">
           <div class="hot-product-img" >
             <img src="<?php 
               if($imgFirstpro['image']=="")
               {
                
                echo Yii::$app->urlManager->baseUrl."/uploads/notimg.png";
               }
               else
               {  echo $imgFirstpro['image']; 
             }?>" alt="">
           </div>
           <div class="hot-product-name" >
           <?php echo $value['pro_name']; ?>
          </div>
        </div>
      </a></li>
      <?php }} ?>
</ul>
</div>