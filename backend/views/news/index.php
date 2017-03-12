<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Categorynews;
use backend\models\News;

use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="news-index">
    <form id="form-news" action="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/news/deleteselect" method="post" accept-charset="utf-8">
        <input type="hidden" name="_csrf" id="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?php Pjax::begin(['id'=>'pjax-news']); ?>    
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
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
        ['class' => 'yii\grid\SerialColumn'],
        'news_name',
        [
        'attribute' => 'Image',
        'format' => 'raw',    
        'value' => function ($data) {
            return Html::img($data['image'],
                ['width' => '100px','height'=>'100px'],['alt'=>$data['image']]);
        },
        ],
        [
        'attribute' => 'cat_news_id',
        'format' => 'raw',   
        'label'=>'Loại tin', 
        'value' => function ($data) {
            $catnews=new Categorynews();
            $news=$catnews->getname($data['cat_news_id']);

            return  $news['cat_name_news'];
        },
          'filter' => \yii\helpers\ArrayHelper::map(Categorynews::find()->all(), 'id', 'cat_name_news'),

        ],

        [
           'attribute' => 'status',
          'format' => 'raw',   
           'value' => function ($data) {
            return ($data['status'])?'Hiện':'Ẩn';
        },
           'filter' => ['0'=>'Ẩn','1'=>'hiện'],

        ],

       
        'view',

            // 'created_at',
            // 'update_at',
            // 'meta_keyword',

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
                        $.pjax.reload({container: '#pjax-news'});
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
        <?php Pjax::end(); ?>
        <?php 
        $data= News::find()->count();
        if($data>0)
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



