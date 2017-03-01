<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sapo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['id'=>'description','rows' => 6]) ?>
    <img src="" id="imagenews" alt="">

    <?= $form->field($model, 'image')->textInput(['id'=>'image-news','maxlength' => true]) ?>

    <?= $form->field($model, 'cat_news_id')->dropDownlist($datacatnews,['prompt'=>'-Chọn loại tin-']) ?>

    <?= $form->field($model, 'status')->checkBox() ?>
    <?= $form->field($model, 'meta_keyword')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
