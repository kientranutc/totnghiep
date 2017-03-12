<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\ImageProducts;
use backend\models\Products;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Chi tiết sản phẩm</a></li>
  <?php if((Yii::$app->controller->action->id)!="update") 
  {?>
  <li><a data-toggle="tab" href="#menu1">Ảnh sản phẩm</a></li>
  <?php }else {

   ?>
     <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Xem ảnh sản phẩm:</button>

  <?php } ?>

</ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <?= $form->field($model, 'pro_name',['enableAjaxValidation' => true])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cat_id')->dropDownList($dropdownlist,['prompt'=>'-Danh mục sản phẩm-']) ?>

    <?= $form->field($model, 'pro_price',['enableAjaxValidation' => true])->textInput() ?>

    <?= $form->field($model, 'sale_id')->dropDownList($datasale,['prompt'=>'-Giảm giá-']) ?>

    <?= $form->field($model, 'sapo')->textInput(['maxlength' => true,'id'=>"sapo-product"]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6,'id'=>'description-product']) ?>

    <?= $form->field($model, 'quantity',['enableAjaxValidation' => true])->textInput() ?>

    <?= $form->field($model, 'name_seo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'status')->checkBox() ?>
        <?= $form->field($model, 'ishot')->checkBox() ?>


    </div>
    <div id="menu1" class="tab-pane fade">
   <div class="input_fields_wrap">
   
   <input type="hidden" name="hiddenimage" id="hidden-product"  value="">
        <a href="javascript:void(0)" class="add_field_button"> <span class="glyphicon glyphicon-plus"></span> Thêm ảnh</a>
   <br/> <div id="imageinput"><input type="text" name="imagepro[]" placeholder="Click để thêm ảnh" id="imageproduct_1" value="" count="1" class="imagepro"></div>
</div>
    </div>
   
    
  </div>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm sản phẩm' : 'Cập nhập sản phẩm', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Danh sách ảnh sản phẩm :<?php
           $pro=new Products();
   $idpro=isset($_GET['id'])?$_GET['id']:"";
   $dataname=$pro->getname( $idpro);

       echo  $dataname['pro_name'];
          ?></h4>
      </div>
      <div class="modal-body">
      <?php 
      $imagepro=new ImageProducts();
       $id=isset($_GET['id'])?$_GET['id']:"";
       $dataimage=$imagepro->getimage($id);
       
       ?>

       <div class="table-responsive">
           <table class="table table-hover">
               <thead>
                   <tr>
                       <th>STT</th>
                       <th>Ảnh</th>
                       <th>Trạng Thái</th>
                       <th colspan="2"></th>
                   </tr>
               </thead>
               <tbody>

               <?php 
                 $i=1;
               foreach ($dataimage as $key => $value) {
             
               ?>
                   <tr>
                       <td><?php echo $i; ?></td>
                       <td><img src="<?php echo $value['image']; ?>" width="100" height="100" alt=""></td>
                       <td><?php echo ($value['status']==0)?"Hiện":"ẩn" ?></td>
                       <td><a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                   </tr>
                   <?php  $i++;} ?>
               </tbody>
           </table>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

