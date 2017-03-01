<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header id="header">
        <div id="hot-line">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-5">
                <span class="glyphicon glyphicon-earphone" id="hotline-icon"></span>
                <span class="hotline-text">Hotline mua hàng </span>
                <span class="hotline-number">1900 88 32 32 - 0916 72 69 59</span>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-7">
                <div class="inner-signin">
                  <div class="login">

                   <a href="#"> <span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a>
                 </div>
                 <div class="regester">

                  <a href="#"><span class="glyphicon glyphicon-lock"></span> Đăng ký</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="logo-search-cart">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="logo">
                <a href="#">
                  <img src="image/logo.png" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-7">
              <div class="form-search">
                <form class="form-inline">
                  <div class="form-group">
                    <input class="form-control" id="input-search" type="text" placeholder="Nhập từ khóa để tìm sản phẩm">
                    <button type="submit" class="btn btn-default" id="submit-search"><span class="glyphicon glyphicon-search"></span></button>
                  </div>
                </form>
              </div>
              <div class="suggest">
                <span>
                 Oppo R7, Lumia 920, Samsung Galaxy S4, Mobiistar Lai 504C, BlackBerry Priv,iPhone 6 64GB..</span
               </div>
             </div>
           </div>
           <div class="col-md-2">
            <div class="cart">
              <a href="#">
                <span class="inner-cart">
                  <span class="glyphicon glyphicon-shopping-cart"></span>
                  <span class="total-cart">
                    0
                  </span>
                </span>
                <span>Giỏ hàng</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="menu-top">
       <div class="container">
         <div class="row">
           <div class="col-md-3">
             <div class="menu-left">
               <a href=""> <span class="glyphicon glyphicon-home"></span></a> <span>Danh mục sản phẩm</span> <span class="glyphicon glyphicon-triangle-bottom"></span>
               <div class="submenu">
                <ul>
                  <li><a href=""><i class="fa fa-mobile" aria-hidden="true"></i> Điện thoại</a>

                   <ul class="sub1">
                     <div class="sub-content">
                       <div class="sub-title">
                         <h3>Hãng sản xuất</h3>
                       </div>
                       <div class="row">

                        <div class="col-md-3">
                          <ul class="colmenu">
                           <li><a href="">a</a></li>
                           <li><a href="">a</a></li>
                           <li><a href="">a</a></li>
                           <li><a href="">a</a></li>
                           <li><a href="">a</a></li> 
                         </ul>
                       </div>
                       <div class="col-md-3">
                        <ul class="colmenu">
                         <li><a href="">a</a></li>
                         <li><a href="">a</a></li>
                         <li><a href="">a</a></li>
                         <li><a href="">a</a></li>
                         <li><a href="">a</a></li> 

                       </ul>
                     </div>
                     <div class="col-md-6">

                       <div class="colmenu-logo">
                         <img src="image/phone.png" alt="">
                       </div>
                     </div>

                   </div>

                 </div>

               </ul>
             </li>
             <li><a href=""><i class="fa fa-tablet" aria-hidden="true"></i> Tablet</a>
               <ul class="sub1">
                 <div class="sub-content">
                   <div class="sub-title">
                     <h3>Hãng sản xuất</h3>
                   </div>
                   <div class="row">

                    <div class="col-md-3">
                      <ul class="colmenu">
                       <li><a href="">a</a></li>
                       <li><a href="">a</a></li>
                       <li><a href="">a</a></li>
                       <li><a href="">a</a></li>
                       <li><a href="">a</a></li> 
                     </ul>
                   </div>
                   <div class="col-md-3">
                    <ul class="colmenu">
                     <li><a href="">a</a></li>
                     <li><a href="">a</a></li>
                     <li><a href="">a</a></li>
                     <li><a href="">a</a></li>
                     <li><a href="">a</a></li> 
                   </ul>
                 </div>
                 <div class="col-md-6">

                   <div class="colmenu-logo">
                     <img src="image/tablet.png" alt="">
                   </div>
                 </div>

               </div>

             </div>
           </ul>
         </li>
         <li><a href=""><i class="fa fa-laptop" aria-hidden="true"></i> Laptop</a>
           <ul class="sub1">
            <div class="sub-content">
             <div class="sub-title">
               <h3>Hãng sản xuất</h3>
             </div>
             <div class="row">

              <div class="col-md-3">
                <ul class="colmenu">
                 <li><a href="">a</a></li>
                 <li><a href="">a</a></li>
                 <li><a href="">a</a></li>
                 <li><a href="">a</a></li>
                 <li><a href="">a</a></li> 
               </ul>
             </div>
             <div class="col-md-3">
              <ul class="colmenu">
               <li><a href="">a</a></li>
               <li><a href="">a</a></li>
               <li><a href="">a</a></li>
               <li><a href="">a</a></li>
               <li><a href="">a</a></li> 
             </ul>
           </div>
           <div class="col-md-6">

             <div class="colmenu-logo">
               <img src="image/laptop.png" alt="">
             </div>
           </div>


         </div>

       </div>
     </ul>
   </li>
   <li><a href=""><i class="fa fa-usb" aria-hidden="true"></i> Linh kiện</a>
    <ul class="sub1">
      <div class="sub-content">
       <div class="sub-title">
         <h3>Hãng sản xuất</h3>
       </div>
       <div class="row">

        <div class="col-md-4">
          <ul class="colmenu">
           <li><a href="">a</a></li>
           <li><a href="">a</a></li>
           <li><a href="">a</a></li>
           <li><a href="">a</a></li>
           <li><a href="">a</a></li> 
         </ul>
       </div>
       <div class="col-md-4">
        <ul class="colmenu">
         <li><a href="">a</a></li>
         <li><a href="">a</a></li>
         <li><a href="">a</a></li>
         <li><a href="">a</a></li>
         <li><a href="">a</a></li> 
       </ul>
     </div>

   </div>

 </div>
</ul>
</li>
<li><a href=""><i class="fa fa-laptop" aria-hidden="true"></i> Laptop</a>
</li>
<li><a href=""><i class="fa fa-laptop" aria-hidden="true"></i> Laptop</a>
  <li><a href=""><i class="fa fa-laptop" aria-hidden="true"></i> Laptop</a>
  </li>
</ul>
</div>
</div>
</div>
<div class="col-md-9">
  <ul class="menu-r">
    <li><a href="">Tin tức</a></li>
    <li><a href="">Chính sách mua hàng</a></li>
    <li><a href="">Giới thiệu</a></li>
    <li><a href="">Liên hệ</a></li>
  </ul>
</div>
</div>
</div>
</div>
</header>
<div class="wrapp">
  <div class="container">
    <div class="col-md-9 content-left">
      <div class="slideshow">
        <div class="slideanh owl-theme ">
          <div class="slide"><a href=""><img src="image/slide1.png" alt=""></a></div>
          <div class="slide"><a href=""><img src="image/slide2.png" alt=""></a></div>
          <div class="slide"><a href=""><img src="image/slide3.png" alt=""></a></div>
          <div class="slide"><a href=""><img src="image/slide4.png" alt=""></a></div>
        </div>
      </div>
      <?= $content ?>
</div>


<div class="col-md-3 content-right">
  <div class="online-phone">
    <div class="online-phone-tile">
      <h3>Hỗ trợ trực tuyến</h3>
    </div>
    <div class="online-phone-content">
      <ul>
        <li>
          <div class="inner-online-phone">
            <div class="online-phone-content-left">
              <img src="image/avatalienhe.jpg" alt="">
            </div>
            <div class="online-phone-content-right">
              <p>Kinh doanh -<span>Kiên trần</span></p>
              <p>Call: 0916 72 69 59</p>
              <p><a class="mar-right" href="skype:dangseotop?chat"><img alt="skype" src="image/skype.png" style="float: left;margin-right: 10px;">  </a></p>

            </div>
          </div>
        </li>
        <li>
          <div class="inner-online-phone">
            <div class="online-phone-content-left">
              <img src="image/avatalienhe.jpg" alt="">
            </div>
            <div class="online-phone-content-right">
              <p>Kinh doanh -<span>Kiên trần</span></p>
              <p>Call: 0916 72 69 59</p>
              <p><a class="mar-right" href="skype:dangseotop?chat"><img alt="skype" src="image/skype.png" style="float: left;margin-right: 10px;">  </a></p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="camket">
    <div class="camket-title">
      <h4>Cam kết vàng</h4>
    </div>
    <div class="camket-content">
      <ul>
        <li>
          <img src="image/star.png" alt="">
          <span class="star">1</span>
          <span   class="name-camket">Sản phẩm chính hãng</span>
        </li>
        <li>
          <img src="image/star.png" alt="">
          <span class="star">2</span>
          <span  class="name-camket"> Bảo hành chính hãng</span>
        </li>
        <li>
          <img src="image/star.png" alt="">
          <span class="star">3</span>
          <span class="name-camket">Tư vấn tin cậy</span>
        </li>
        <li>
          <img src="image/star.png" alt="">
          <span class="star">4</span>
          <span class="name-camket">Giá cả cạnh tranh</span>
        </li>
        <li>
          <img src="image/star.png" alt="">
          <span class="star">5</span>
          <span class="name-camket">Mua sắm dễ dàng</span>
        </li>
        <li>
          <img src="image/star.png" alt="">
          <span  class="star">6</span>
          <span class="name-camket">Phục vụ chu đáo</span>
        </li>
        <li>
          <img src="image/star.png" alt="">
          <span class="star">7</span>
          <span class="name-camket"> Dịch vụ hoàn hảo</span>
        </li>
      </ul>
    </div>
  </div>
  <div class="hot-product">
    <div class="hot-product-title">
      <h4>Sản phẩm Nổi bật</h4>
    </div> 
    <div class="hot-product-content">
     <ul>
       <li><a href="#">
         <div class="inner-hot-product">
           <div class="hot-product-img" >
             <img src="image/hot.png" alt="">
           </div>
           <div class="hot-product-name" >
            Hauwei P8 lite
          </div>
        </div>
      </a></li>
      <li><a href="#">
       <div class="inner-hot-product">
         <div class="hot-product-img" >
           <img src="image/hot2.jpg" alt="">
         </div>
         <div class="hot-product-name" >
          Iphone 6s plus
        </div>
      </div>
    </a></li>
    <li><a href="#">
     <div class="inner-hot-product">
       <div class="hot-product-img" >
         <img src="image/hot3.png" alt="">
       </div>
       <div class="hot-product-name" >
        Iphone 6 64gb
      </div>
    </div>
  </a></li>
  <li><a href="#">
   <div class="inner-hot-product">
     <div class="hot-product-img" >
       <img src="image/hot4.png" alt="">
     </div>
     <div class="hot-product-name" >
      HTC one A9
    </div>
  </div>
</a></li>
<li><a href="#">
 <div class="inner-hot-product">
   <div class="hot-product-img" >
     <img src="image/hot4.jpg" alt="">
   </div>
   <div class="hot-product-name" >
    OPP R7 plus
  </div>
</div>
</a></li>
</ul>
</div>
</div>
<div class="news">
 <div class="news-title">
   <h4>Khuyến mại</h4>
   <a href="">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
 </div>
 <div class="hot-product-content">
   <ul>
     <li><a href="#">
       <div class="inner-hot-product">
         <div class="hot-product-img" >
           <img src="image/tin1.jpg" alt="">
         </div>
         <div class="hot-product-name" >
          Lorem ipsum dolor sit amet.
        </div>
      </div>
    </a></li>
    <li><a href="#">
     <div class="inner-hot-product">
       <div class="hot-product-img" >
         <img src="image/tin1.jpg" alt="">
       </div>
       <div class="hot-product-name" >
        Lorem ipsum dolor sit amet.
      </div>
    </div>
  </a></li>
  <li><a href="#">
   <div class="inner-hot-product">
     <div class="hot-product-img" >
       <img src="image/tin3.jpg" alt="">
     </div>
     <div class="hot-product-name" >
      Lorem ipsum dolor sit amet.
    </div>
  </div>
</a></li>
<li><a href="#">
 <div class="inner-hot-product">
   <div class="hot-product-img" >
     <img src="image/tin4.jpg" alt="">
   </div>
   <div class="hot-product-name" >
    Lorem ipsum dolor sit amet.
  </div>
</div>
</a></li>
<li><a href="#">
 <div class="inner-hot-product">
   <div class="hot-product-img" >
     <img src="image/tin5.jpg" alt="">
   </div>
   <div class="hot-product-name" >
    Lorem ipsum dolor sit amet.
  </div>
</div>
</a></li>
</ul>
</div>
</div>
<div class="news">
 <div class="news-title">
   <h4>Tin tức</h4>
   <a href="">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
 </div>
 <div class="hot-product-content">
   <ul>
     <li><a href="#">
       <div class="inner-hot-product">
         <div class="hot-product-img" >
           <img src="image/tin1.jpg" alt="">
         </div>
         <div class="hot-product-name" >
          Lorem ipsum dolor sit amet.
        </div>
      </div>
    </a></li>
    <li><a href="#">
     <div class="inner-hot-product">
       <div class="hot-product-img" >
         <img src="image/tin1.jpg" alt="">
       </div>
       <div class="hot-product-name" >
        Lorem ipsum dolor sit amet.
      </div>
    </div>
  </a></li>
  <li><a href="#">
   <div class="inner-hot-product">
     <div class="hot-product-img" >
       <img src="image/tin3.jpg" alt="">
     </div>
     <div class="hot-product-name" >
      Lorem ipsum dolor sit amet.
    </div>
  </div>
</a></li>
<li><a href="#">
 <div class="inner-hot-product">
   <div class="hot-product-img" >
     <img src="image/tin4.jpg" alt="">
   </div>
   <div class="hot-product-name" >
    Lorem ipsum dolor sit amet.
  </div>
</div>
</a></li>
<li><a href="#">
 <div class="inner-hot-product">
   <div class="hot-product-img" >
     <img src="image/tin5.jpg" alt="">
   </div>
   <div class="hot-product-name" >
    Lorem ipsum dolor sit amet.
  </div>
</div>
</a></li>
</ul>
</div>
</div>
</div>
</div>

</div>

<footer id="footer">
<div class="container">
<div class="row">
<div class="col-md-4">
<p>Bản quyền thuộc về: <a href="https://www.facebook.com/profile.php?id=100005095362877">Kiên-Trần</a></p>
  </div>
  </div>
  <div class="col-md-4">
    
  </div>
  <div class="col-md-4">
    
  </div>
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
