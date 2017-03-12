<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Sale;
use backend\models\Categories;
use yii\data\ActiveDataProvider;
use backend\models\Products;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
     ?>
     <?php 

   $cat=new Categories();
   $arraycat=$cat->getallcat();

   $datacat=$cat->showCategories($arraycat);
      ?>

<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới sản phẩm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
     <form id="form-news" action="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/products/deleteall" method="post" accept-charset="utf-8">
        <input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
<?php Pjax::begin(); ?>    <?= GridView::widget([
    'layout' => "{items}\n{pager}",
           'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{pager}",
            'tableOptions'=>['class'=>'table table-responsive'],
            'rowOptions' => function ($model, $index, $widget, $grid){
              if($model->status== 1){
                return ['class' => 'success'];
            }else{
                return [];
            }
        },
        'columns' => [
           ['class' => 'yii\grid\CheckboxColumn'
        ,

        'checkboxOptions' => function($model, $key, $index, $column) {

            return ['value' => $model->id,'id'=>"select".$model->id,];
        },
        ],

        
            'pro_name',
        [
        'attribute' => 'cat_id',
        'format' => 'raw',   
        'label'=>'Danh mục sản phẩm', 
        'value' => function ($data) {
            $cat=new Categories();
            $cats=$cat->getnamecate($data['cat_id']);
           return   ($cats["parent_id"]==0)?$cats['cat_name']:"--".$cats['cat_name'];
        },
          'filter' => $datacat,

        ],

            'pro_price',
         [
        'attribute' => 'sale_id',
        'format' => 'raw',   
        'label'=>'Giảm giá', 
        'value' => function ($data) {
            $sale=new Sale();
            $sales=$sale->getname($data['sale_id']);
            return  ($sales['sale_name']>0)?$sales['sale_name']."(%)":"";
        },
          'filter' => \yii\helpers\ArrayHelper::map(Sale::find()->all(), 'id', 'sale_name'),

        ],

            'quantity',
             [
           'attribute' => 'status',
          'format' => 'raw',   
           'value' => function ($data) {
            return ($data['status'])?'Hiện':'Ẩn';
        },
           'filter' => ['0'=>'Ẩn','1'=>'hiện'],

        ],
        'ishot',
            
    [
  'class' => 'yii\grid\ActionColumn',
  'template' => '{view}{update}{show}',
  'buttons' => [
    'view' => function ($url, $model) {
        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                    'title' => Yii::t('app', 'New Action1'),
        ]);
    }
    ,
   'update' => function ($url, $model, $key) {
        return $model->status == 1 ? Html::a('<span class="glyphicon glyphicon-wrench"></span>', $url) : '';
    },
    'show' => function ($url, $model,$key) {
        return Html::a('<span class="glyphicon glyphicon-wrench"></span>', $url, [
                    'title' => Yii::t('app', 'add'),
        ]);
    }
  ],
],
        ],
    ]); ?>
<?php Pjax::end(); ?>

    
    <?php
  
        if(count($dataProvider)>0)
        {
         ?>
        <div class="form-group">
          <div class="col-sm-10 col-offset-2">
               <?= Html::submitButton('xoá chọn',[ 'name'=>'xoachon', 'value' => 'xoachon','id'=>'deletenews', 'class' => 'btn btn-default disabled','data-pjax' => 0,'data' => [
            'confirm' => 'Bạn có muốn xóa không?',
              ],]) ?>
            </div>
          </div>
          <?php }

           ?>

           </form>
</div>
