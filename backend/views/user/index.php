<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\common\authen;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
if(Yii::$app->user->isGuest)
{
Yii::$app->user->logout();
   return Yii::$app->getResponse()->redirect(['/site/login']);
}

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(['id'=>"pjax-container"]); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            [
        'attribute' => 'auth_key',
        'value' => function ($model) {
         return md5($model->auth_key); 
         },
         ],
         
           
              [
        'attribute' => 'password_hash',
        'value' => function ($model) {
         return sha1($model->password_hash); 
         },
         ],
            'password_reset_token',
            // 'email:email',
             'level',
            // 'status',
            // 'created_at',
            // 'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [

                    'delete' => function ($url) {
                        $level=Yii::$app->user->identity->level;
                        if($level=="1")
                        {
                        return Html::a(Yii::t('yii', '<span class="glyphicon glyphicon-trash"></span>'), '#', [
                            'onclick' => "
                                if (confirm('bạn có muốn xóa không')) {
                                    $.ajax('$url', {
                                        type: 'POST'
                                    }).done(function(data) {
                                        $.pjax.reload({container: '#pjax-container'});
                                    });
                                }
                                return false;
                            ",
                        ]);
                    }},
                ],
            ],    
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
<?php 
$authen=new authen();
$authen->security();

 ?>
