<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PriceRange */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="price-range-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pr_first',['enableAjaxValidation' => true])->textInput() ?>

    <?= $form->field($model, 'pr_last',['enableAjaxValidation' => true])->textInput() ?>

      <?= $form->field($model, 'status')->checkBox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
