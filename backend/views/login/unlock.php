<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;
?>
<div class="login-form">
    <h1>
        <a href="<?php echo Yii::$app->request->baseUrl; ?>" title="">
            <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/UPAS_logo_blk2.png" width="60%" height="60%" />
        </a>
    </h1>
    <?php Pjax::begin(); ?> 
    <?php $form = ActiveForm::begin(['id' => 'unlock-account-form',                
                'validateOnChange'     => false,
                'enableAjaxValidation' => true,
                'validateOnSubmit'     => true,]); ?>
    <br>
        
        
        <?php echo $form->field($model, 'email', [
           'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent', 'autocomplete' => "off"] ,
            'template' => '<div class="form-group log-status">{input}<i class="fa fa-user"></i>{error}{hint}</div>',
     ])->textInput()->input('email', ['placeholder' => "Please enter your email address",  'class' => "form-control"])->label(false); ?>
    
        <?php
//        echo $form->field($model, 'password', [
//           'inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control transparent', 'autocomplete' => "off"] ,
//            'template' => '<div class="form-group log-status">{input}<i class="fa fa-lock"></i>{error}{hint}</div>',
//     ])->passwordInput()->input('password', ['placeholder' => "Password",  'class' => "form-control"])->label(false); ?>

        

        <?php // echo  $form->field($model, 'rememberMe')->checkbox() ?>
        <div class="row-fluid clearfix">
            <?= Html::a('Login?', ['/login/index'], ['class'=>'link']) ?>
            <!--<a class="link" href="#"></a>-->
        </div>
        <div class="form-group ">
            <div class="row clearfix">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary log-btn', 'name' => 'login-button']) ?>
                </div>
                
<!--                <div class="col-sm-12 col-md-6 col-lg-6" >
                    <?= Html::resetButton('Cancel', ['class' => 'btn btn-primary log-btn', 'name' => 'reset-button']) ?>
                </div>-->
            </div>
            
        </div>

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?> 
    <?php
        $this->registerJs(''
                . ''
                
                . '', \yii\web\VIEW::POS_READY);
    ?>
        
<!--    <div class="form-group ">
        <input type="text" class="form-control" placeholder="Username " id="UserName">
        <i class="fa fa-user"></i>
    </div>
    <div class="form-group log-status">
        <input type="password" class="form-control" placeholder="Password" id="Passwod">
        <i class="fa fa-lock"></i>
    </div>-->
<!--    <span class="alert">Invalid Credentials</span>
    <a class="link" href="#">Lost your password?</a>
    <button type="button" class="log-btn" >Log in</button>-->
</div><!-- END CONTENT -->