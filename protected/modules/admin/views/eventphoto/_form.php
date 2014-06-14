<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'event-photo-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'class' => 'well',
    ),
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListControlGroup($model, 'event_id', Event::model()->getOptions(), array('empty' =>$model->getAttributeLabel('event_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'size',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'source_path',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'source_url',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
