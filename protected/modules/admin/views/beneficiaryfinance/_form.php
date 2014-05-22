<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'beneficiary-finance-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'has_supplies_card',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'income_from_paterfamilias',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_from_beneficiary_business',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_from_beneficiary_family_business',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_from_social_security',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_from_retirement',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_from_lands',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_from_property',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_from_agriculture',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_from_national_aid_fund',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_from_zakat_fund',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_from_charity_fund',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'income_total',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_home_rent',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_food',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_clothes',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_medication',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_smoking',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_education',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_transportation',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_gas_invoice',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_water_invoice',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_elctricity_invoice',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_kerosene',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'spending_other',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'spending_total',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'beneficiary_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
