<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Slideshow */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slideshow-form">

    <?php $form = ActiveForm::begin(); ?>
    <img src="" id="attr_image" alt="">
    <?= $form->field($model, 'image')->textInput(['maxlength' => true,'id'=>'image_slideshow']) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'slideshow_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkBox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
