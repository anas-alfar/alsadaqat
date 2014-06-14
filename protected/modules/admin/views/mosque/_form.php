<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mosque-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'class' => 'well',
    ),
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldControlGroup($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'contract_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'contract_photo_path',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'construction_progress',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'donator_id', Donator::model()->getOptions(), array('empty' =>$model->getAttributeLabel('donator_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'agent_id', MosqueAgent::model()->getOptions(), array('empty' =>$model->getAttributeLabel('agent_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'mosque_type_id', MosqueType::model()->getOptions(), array('empty' =>$model->getAttributeLabel('mosque_type_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'country_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('country_id'), 'class'=>'span5', 'maxlength'=>11, 'onChange' =>"updateCitiesDropDown( this.value, 'Mosque_city_id','".$model->getAttributeLabel('city')."')")); ?>

	<?php echo $form->dropDownListControlGroup($model,'city_id', array() ,array('empty' =>$model->getAttributeLabel('city_id'), 'class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'notes',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textFieldControlGroup($model,'options',array('class'=>'span5','maxlength'=>1024)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
