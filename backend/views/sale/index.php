<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sale', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(['id'=>'sale' ]); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'sale_name',
            'sale_sapo:ntext',

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
                        $.pjax.reload({container: '#sale'});
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
