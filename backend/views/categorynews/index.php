<?php
session_start();
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use backend\models\Categorynews;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorynewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categorynews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categorynews-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Categorynews', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
    if(isset($_SESSION['success_cat_new']))
            {
                ?>
                <div class="alert alert-success">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    <strong>Success!</strong> <?php echo $_SESSION['success_cat_new']; ?>
                </div>
                <?php 
                  unset($_SESSION['success_cat_new']);
                } ?>
                <?php 
                if(isset($_SESSION['error_cat_new']))
                {
                    ?>
                    <div class="alert alert alert-warning">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                        <strong>Warning!</strong> <?php echo $_SESSION['error_cat_new']; ?>
                    </div>
                    <?php 
                     unset($_SESSION['error_cat_new']);
                    } ?>
<?php Pjax::begin(['id'=>'pjax-categorynews']); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],
            'cat_name_news',
            'status',
            'created_at',
            'updated_at',

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
                                        $.pjax.reload({container: '#pjax-categorynews'});
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
<?php 

$model=new Categorynews();
if(!Yii::$app->user->isGuest)
{
$level=Yii::$app->user->identity->level;
if($level==1)
{
 ?>
<a href="<?= Url::to(['categorynews/alldelete']);?>">Xóa tất cả</a>
<?php }}
else
{
  Yii::$app->user->logout();
   return Yii::$app->getResponse()->redirect(['/site/login']);
}


 ?>
