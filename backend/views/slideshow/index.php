    <?php

    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Pjax;
    /* @var $this yii\web\View */
    /* @var $searchModel backend\models\SlideshowSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Slideshows';
    $this->params['breadcrumbs'][] = $this->title;
    ?>
    <div class="slideshow-index">

        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Create Slideshow', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?php Pjax::begin(); ?>    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,

            'rowOptions' => function ($model, $index, $widget, $grid){
              if($model->status== 1){
                return ['class' => 'success'];
            }else{
               return ['class' => 'danger'];
           }
       },
       'columns' => [
       ['class' => 'yii\grid\SerialColumn',
       'header'=>'STT',
       ],

       [
       'attribute' => 'image',
       'format' => 'raw',  
       'label'=>'Ảnh slide',  
       'value' => function ($data) {
        return Html::img($data['image'],
            ['width' => '100px','height'=>'100px'],['alt'=>$data['image']]);
    },
    ],
    'url:url',
    'sort',
    'slideshow_name',
    [
    'attribute' => 'status',
    'format' => 'raw',   
    'value' => function ($data) {

        $options = ['class' => 'btn btn-default'];
        if ($data['status'] === 1) {
            Html::removeCssClass($options, 'btn-default');
            Html::addCssClass($options, 'btn-success');
        }
        else
        {
         Html::removeCssClass($options, 'btn-default');
         Html::addCssClass($options, 'btn-danger'); 
     }
     return  Html::tag('div', ($data['status'])?'Hiện':'Ẩn', $options);
     
    },
    'filter' => ['0'=>'Ẩn','1'=>'hiện'],

    ],

    ['class' => 'yii\grid\ActionColumn'],
    ],
    ]); ?>
    <?php Pjax::end(); ?></div>
