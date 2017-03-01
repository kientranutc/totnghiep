<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Categorynews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categorynews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_name_news')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(
          ['0'=>'Ẩn','1'=>'Hiển thị'],         // Flat array ('id'=>'label')
            ['prompt'=>'Chọn loại tin']    // options
        ); ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
