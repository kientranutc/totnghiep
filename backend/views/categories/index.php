<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Categories;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;


   $cat=new Categories();
   $arraycat=$cat->getallcat();

   $datacat=$cat->showCategories($arraycat);
?>
<div class="categories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Categories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        ['class' => 'yii\grid\CheckboxColumn'
        ,
        'checkboxOptions' => function($model, $key, $index, $column) {

            return ['value' => $model->id,'id'=>"select".$model->id,'onchange'=>'check(this.value)'];
        },
        ],
        'id',
          [
        'attribute' => 'cat_name',
        'format' => 'raw',   
        'label'=>'Danh mục sản phẩm', 
        'value' => function ($data) {
            $cat=new Categories();
            $cats=$cat->getnamecate($data['id']);
            $nameCat=$cat->getNamcatParent($data['parent_id']);
           return   ($cats["parent_id"]==0)?$cats['cat_name']:$nameCat['cat_name']."<br/>--".$cats['cat_name'];
        },
        ],
        'parent_id',
       [
        'attribute' => 'cat_image',
        'format' => 'raw',    
        'value' => function ($data) {
            return Html::img($data['cat_image'],
                ['width' => '100px','height'=>'100px'],['alt'=>$data['cat_image']]);
        },
        ],
        [
        'attribute' => 'cat_icon',
        'format' => 'raw',   
        'value' => function ($data) {
            $option=['style'=>['font-size'=>'29px'],];
            Html::addCssClass($options, [
                'theme' =>$data['cat_icon'],
                  
                ]); 
              return  Html::tag('i', '', $options);
        },
        ],
        [
        'attribute' => 'status',
        'format' => 'raw',   
        'value' => function ($data) {
            return ($data['status'])?'Hiện':'Ẩn';
        },
        'filter' => ['0'=>'Ẩn','1'=>'hiện'],

        ],
            // 'created_at',
            // 'updated_at',
            // 'name_seo',

        ['class' => 'yii\grid\ActionColumn'],
        ],
        ]); ?>
        <?php Pjax::end(); ?></div>
