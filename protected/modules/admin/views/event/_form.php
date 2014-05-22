<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'event-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'organization_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textFieldRow($model,'number_of_days',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'event_type_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'country_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'city_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->DropDownListRow($model, 'status', ENUMHtml::enumItem($model, 'status'), array('class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'start_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'end_at',array('class'=>'span5')); ?>

	<?php echo $form->DropDownListRow($model, 'published', ENUMHtml::enumItem($model, 'published'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->DropDownListRow($model, 'approved', ENUMHtml::enumItem($model, 'approved'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textFieldRow($model,'options',array('class'=>'span5','maxlength'=>1024)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
