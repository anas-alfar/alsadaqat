<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'beneficiary-widow-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'husband_full_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'husband_job',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'husband_date_of_birth',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'husband_date_of_death',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'husband_reason_of_death',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'husband_death_certificate_path',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'number_of_sons',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'number_of_daughters',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'beneficiary_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
