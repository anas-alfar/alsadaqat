<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mosque-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'construction_area',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'construction_cost',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'construction_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'construction_type',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'furniture_type',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'number_of_people',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'number_of_restrooms',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'number_of_floors',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'number_of_entrances',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'has_female_area',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_sound_system',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_air_condition',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'agent_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
