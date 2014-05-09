<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'beneficiary-home-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'owner_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'construction_type',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'number_of_rooms',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'number_of_residents',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'contract_type',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'rent_cost',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rent_type',array('class'=>'span5','maxlength'=>9)); ?>

	<?php echo $form->textFieldRow($model,'has_tv',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_refrigerator',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_washer',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_dryer',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_video_player',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_telephone',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_mobile',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_gas',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_oven',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_microwave',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_air_conditioner',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_water_solar_heater',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_water_electrical_heater',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_gas_heater',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'has_electrical_heater',array('class'=>'span5','maxlength'=>3)); ?>

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
