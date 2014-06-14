<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'city-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'class' => 'well',
    ),
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListControlGroup($model, 'country_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('country_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'name',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldControlGroup($model,'name_ar',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'published', ENUMHtml::enumItem($model, 'published'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
