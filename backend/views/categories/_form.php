<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->dropDownlist($dropdownlist,['prompt'=>'-chọn parent-']) ?>
    <img src="" id="atr_cate"  alt="">

    <?= $form->field($model, 'cat_image')->textInput(['maxlength' => true,'id'=>'cat_image']) ?>

    <?= $form->field($model, 'cat_icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkBox() ?>
    <?= $form->field($model, 'name_seo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
