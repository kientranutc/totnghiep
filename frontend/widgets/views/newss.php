<?php 
if(!empty($dataCatenews))
{
  foreach ($dataCatenews as $key => $value) {
   
 ?>
<div class="news">
 <div class="news-title">
   <h4><?php echo $value['cat_name_news']; ?></h4>
   <a href="">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
 </div>
 <div class="hot-product-content">
   <ul>
   <?php 
  $dataNew=$news->getNewsCat($value['id']);
  if(!empty($dataNew))
  {
   foreach ($dataNew as $key => $valuenews) {
    ?>
<li><a href="#">
 <div class="inner-hot-product">
   <div class="hot-product-img" >
     <img src="<?php 
               if($valuenews['image']=="")
               {
                
                echo Yii::$app->urlManager->baseUrl."/uploads/notimg.png";
               }
               else
               {  echo $valuenews['image']; 
             }?>" alt="">
   </div>
   <div class="hot-product-name" >
    <?php   echo $valuenews['news_name'] ?>
  </div>
</div>
</a></li>
<?php }} ?>
</ul>
</div>
</div>
<?php }} ?>