<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use  yii\bootstrap\Modal;
use backend\models\Property;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PropertySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Properties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="property-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::button('Thêm thuộc tính', ['class' => 'btn btn-success','value'=>Url::to(['create'])." #form-property",'id'=>'btn-modal']) ?>
        <?php Modal::begin([
            'id'=>'modal-from',
            'size'=>'modal-lg',
            ]);
            ?>
    <div  id='modal-content'></div>
    <?php
    Modal::end();
    ?>
</p>
<?php Pjax::begin(); ?>  
  <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
    'id',
    'property_name',
    'status',
    'key_categories',
    ['class' => 'yii\grid\ActionColumn'],
    ],
    ]); ?>
    <?php Pjax::end(); ?>
    </div>
