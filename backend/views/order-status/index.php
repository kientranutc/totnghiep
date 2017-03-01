<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(['id'=>'order-status']); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

    
            'order_status_name',
           [
           'attribute' => 'status',
          'format' => 'raw',   
           'value' => function ($data) {
            return ($data['status'])?'Hiện':'Ẩn';
        },
           'filter' => ['0'=>'Ẩn','1'=>'hiện'],

        ],
        [
        'class' => 'yii\grid\ActionColumn',
        'buttons' => [
        'delete' => function ($url) {
            return Html::a(Yii::t('yii', '<span class="glyphicon glyphicon-trash"></span>'), '#', [
                'onclick' => "
                if (confirm('bạn có muốn xóa không')) {
                    $.ajax('$url', {
                        type: 'POST'
                    }).done(function(data) {
                        $.pjax.reload({container: '#order-status'});
                    });
        }
        return false;
        ",
        ]);
        },
        ],
        ], 
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
