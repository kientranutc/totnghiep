<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Categorynews */

$this->title = $model->cat_name_news;
$this->params['breadcrumbs'][] = ['label' => 'Categorynews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categorynews-view">

    <h1><?= $model->cat_name_news?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cat_name_news',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
