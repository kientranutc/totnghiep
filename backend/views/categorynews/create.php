<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Categorynews */

$this->title = 'Create Categorynews';
$this->params['breadcrumbs'][] = ['label' => 'Categorynews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categorynews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
