<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use  yii\web\Session;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

?>



<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>LOGIN</strong>
                </div>
                <?php
  $session = new Session;
  if(isset($session['error_login']))
  {
    ?>
    <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

      <strong>Success!</strong> <?php echo $session['error_login']; ?>
  </div>
  <?php 
  unset($session['error_login']);
} ?>



                <div class="panel-body">
                 <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                 <fieldset>
                    <div class="row">
                        <div class="center-block">
                            <img class="profile-img"
                            src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span> 
                                  
                                   <input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" autofocus="" aria-required="true" aria-invalid="false">                                </div>
                               </div> 
                               <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-lock"></i>
                                        </span>
                                         <input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" aria-required="true" aria-invalid="false">    
                                         </div>
                                    
                                </div>
                                <div class="form-group">
                                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                </div>
                            </div>
                  
                    </fieldset>

                    <?php ActiveForm::end(); ?>
                </div>
                <div class="panel-footer ">
                    Don't have an account! <a href="<?php  ?>"> Sign Up Here </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

