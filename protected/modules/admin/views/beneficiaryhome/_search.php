<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    'htmlOptions' => array(
        'class' => 'well',
    ),
)); ?>

	<?php echo $form->textFieldControlGroup($model,'id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'description',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldControlGroup($model,'owner_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'construction_type',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_rooms',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_residents',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'contract_type', ENUMHtml::enumItem($model, 'contract_type'), array('class'=>'span5', 'maxlength'=>6)); ?>

	<?php echo $form->textFieldControlGroup($model,'rent_cost',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'rent_type', ENUMHtml::enumItem($model, 'rent_type'), array('class'=>'span5', 'maxlength'=>9)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_tv', ENUMHtml::enumItem($model, 'has_tv'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_refrigerator', ENUMHtml::enumItem($model, 'has_refrigerator'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_washer', ENUMHtml::enumItem($model, 'has_washer'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_dryer', ENUMHtml::enumItem($model, 'has_dryer'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_video_player', ENUMHtml::enumItem($model, 'has_video_player'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_telephone', ENUMHtml::enumItem($model, 'has_telephone'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_mobile', ENUMHtml::enumItem($model, 'has_mobile'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_gas', ENUMHtml::enumItem($model, 'has_gas'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_oven', ENUMHtml::enumItem($model, 'has_oven'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_microwave', ENUMHtml::enumItem($model, 'has_microwave'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_air_conditioner', ENUMHtml::enumItem($model, 'has_air_conditioner'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_water_solar_heater', ENUMHtml::enumItem($model, 'has_water_solar_heater'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_water_electrical_heater', ENUMHtml::enumItem($model, 'has_water_electrical_heater'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_gas_heater', ENUMHtml::enumItem($model, 'has_gas_heater'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_electrical_heater', ENUMHtml::enumItem($model, 'has_electrical_heater'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'beneficiary_id', Beneficiary::model()->getOptions(), array('empty' =>$model->getAttributeLabel('beneficiary_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'created_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'updated_at',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>Yii::t('app', 'Search'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
