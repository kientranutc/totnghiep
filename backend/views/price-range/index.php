<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PriceRangeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Price Ranges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-range-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Price Range', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pr_first',
            'pr_last',
           [
           'attribute' => 'status',
          'format' => 'raw',   
           'value' => function ($data) {
            return ($data['status'])?'Hiện':'Ẩn';
        },
           'filter' => ['0'=>'Ẩn','1'=>'hiện'],

        ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
