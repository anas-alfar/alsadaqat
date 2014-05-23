<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'contract_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'contract_photo_path',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'construction_progress',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->dropDownListRow($model, 'donator_id', Donator::model()->getOptions(), array('empty' =>$model->getAttributeLabel('donator_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'agent_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->dropDownListRow($model, 'mosque_type_id', MosqueType::model()->getOptions(), array('empty' =>$model->getAttributeLabel('mosque_type_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListRow($model, 'country_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('country_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'city_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'created_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'updated_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textFieldRow($model,'options',array('class'=>'span5','maxlength'=>1024)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>Yii::t('app', 'Search'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
