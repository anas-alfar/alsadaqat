<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);

//CHtml::$errorContainerTag = 'small';
//CHtml::$errorCss          = 'has-error';
?>

<h1><?php echo Yii::t('app', 'Login'); ?></h1>

<p><?php echo Yii::t('app', 'Please fill out the following form with your login credentials:'); ?></p>

<div class="form">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    	'id'=>'login-form',
    	'enableClientValidation'=>true,
    	'clientOptions'=>array(
    		'validateOnSubmit'=>true,
    		//'inputContainer'   => 'div.form-group',
            //'errorCssClass'    => 'has-error',
            //'successCssClass'  => 'has-success',
    	),
        'htmlOptions' => array(
            'class' => 'well',
        ),
    )); ?>
    
    	<p class="note"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required'); ?></p>
    
            <?php echo $form->textFieldControlGroup($model,'username',array('class'=>'span5','maxlength'=>32)); ?>
            
            <?php echo $form->passwordFieldControlGroup($model,'password',array('class'=>'span5','maxlength'=>32)); ?>
    
        <!--
    	<div class="form-goup row rememberMe">
    		<?php echo $form->checkBox($model,'rememberMe'); ?>
    		<?php echo $form->label($model,Yii::t('app', 'rememberMe')); ?>
    		<?php echo $form->error($model,'rememberMe'); ?>
    	</div> -->

    	<div><?php echo CHtml::link( Yii::t('app', 'Forget Password ?'), array('/admin/default/resetpassword') ) ?></div>
    	
        <div class="form-actions">
            <?php echo TbHtml::submitButton( Yii::t('app', 'Login'), array(
                'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
                'size'=>TbHtml::BUTTON_SIZE_LARGE,
            )); ?>
        </div>
    
    <?php $this->endWidget(); ?>
</div><!-- form -->