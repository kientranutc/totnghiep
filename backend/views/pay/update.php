<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pay */

$this->title = 'Update Pay: ' . $model->pay_name;
$this->params['breadcrumbs'][] = ['label' => 'Pays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pay_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pay-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
