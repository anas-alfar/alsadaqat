<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);

CHtml::$errorContainerTag = 'small';
CHtml::$errorCss          = 'has-error';
?>

<h1><?php echo Yii::t('app', 'Login'); ?></h1>

<p><?php echo Yii::t('app', 'Please fill out the following form with your login credentials:'); ?></p>

<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
		'inputContainer'   => 'div.form-group',
        'errorCssClass'    => 'has-error',
        'successCssClass'  => 'has-success',
	),
)); ?>

	<p class="note"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required'); ?></p>

        <div class="form-group">
		<?php echo $form->labelEx($model,Yii::t('app', 'username')); ?>
		<?php echo $form->textField($model,'username', array('class'=>'span5 form-control')); ?>
		<?php echo $form->error($model,'username', array('class' => 'control-label')); ?>
		</div>

        <div class="form-group">
		<?php echo $form->labelEx($model,Yii::t('app', 'password')); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password', array('class' => 'control-label')); ?>
		</div>

	<div class="form-goup row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,Yii::t('app', 'rememberMe')); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	
    <div class="form-group row buttons">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Login',
        )); ?>
    </div>

<?php $this->endWidget(); ?>
</div><!-- form -->
