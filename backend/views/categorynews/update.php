<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Categorynews */

$this->title = 'Update Categorynews: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Categorynews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categorynews-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
