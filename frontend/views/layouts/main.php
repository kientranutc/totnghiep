<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\category;
use frontend\widgets\hotproducts;
use frontend\widgets\slide;
use frontend\widgets\newss;
use frontend\widgets\cart;

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
 <input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
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
                  <img src="<?php echo Yii::$app->urlManager->baseUrl ?>/image/logo.png" alt="">
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
        <?=cart::widget()?>
          </div>
        </div>
      </div>
      <div class="menu-top">
       <div class="container">
         <div class="row">
           <div class="col-md-3">
             <div class="menu-left">
               <a href=""> <span class="glyphicon glyphicon-home"></span></a> <span>Danh mục sản phẩm</span> <span class="glyphicon glyphicon-triangle-bottom"></span>
                <?=category::widget() ?> 
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
     <?=slide::widget()?>
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
          <img src="<?php echo Yii::$app->urlManager->baseUrl ?>/image/star.png" alt="">
          <span class="star">1</span>
          <span   class="name-camket">Sản phẩm chính hãng</span>
        </li>
        <li>
          <img src="<?php echo Yii::$app->urlManager->baseUrl ?>/image/star.png" alt="">
          <span class="star">2</span>
          <span  class="name-camket"> Bảo hành chính hãng</span>
        </li>
        <li>
          <img src="<?php echo Yii::$app->urlManager->baseUrl ?>/image/star.png" alt="">
          <span class="star">3</span>
          <span class="name-camket">Tư vấn tin cậy</span>
        </li>
        <li>
          <img src="<?php echo Yii::$app->urlManager->baseUrl ?>/image/star.png" alt="">
          <span class="star">4</span>
          <span class="name-camket">Giá cả cạnh tranh</span>
        </li>
        <li>
          <img src="<?php echo Yii::$app->urlManager->baseUrl ?>/image/star.png" alt="">
          <span class="star">5</span>
          <span class="name-camket">Mua sắm dễ dàng</span>
        </li>
        <li>
          <img src="<?php echo Yii::$app->urlManager->baseUrl ?>/image/star.png" alt="">
          <span  class="star">6</span>
          <span class="name-camket">Phục vụ chu đáo</span>
        </li>
        <li>
          <img src="<?php echo Yii::$app->urlManager->baseUrl ?>/image/star.png" alt="">
          <span class="star">7</span>
          <span class="name-camket"> Dịch vụ hoàn hảo</span>
        </li>
      </ul>
    </div>
  </div>
  <div class="hot-product">
    <?=hotproducts::widget()?>
</div>

<?=newss::widget() ?>
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
<div class="modal fade bs-example-modal-sm" id="modal-add-cat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
           <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Đặt hàng</h4>
      </div>
      <div class="modal-body">
        <span>Đặt hàng thành công sản phẩm:</span> <span id="name-pro-add-cart"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </div>
  </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
