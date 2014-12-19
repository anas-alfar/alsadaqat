<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'action'      => Yii::app()->createUrl($this->route),
		'method'      => 'get',
		'htmlOptions' => array(
			'class'      => 'well',
		),
	));?>

<?php echo $form->textFieldControlGroup($model, 'id', array('class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->dropDownListControlGroup($model, 'event_id', Event::model()->getOptions(), array('empty' => $model->getAttributeLabel('event_id'), 'class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->dropDownListControlGroup($model, 'title', ENUMHtml::enumItem($model, 'title'), array('class' => 'span5', 'maxlength' => 255));?>

<?php echo $form->textFieldControlGroup($model, 'start_time', array('class' => 'span5'));?>

<?php echo $form->textFieldControlGroup($model, 'end_time', array('class' => 'span5'));?>

<?php echo $form->textFieldControlGroup($model, 'venue_name', array('class' => 'span5', 'maxlength' => 255));?>

<?php echo $form->textFieldControlGroup($model, 'day_number', array('class' => 'span5'));?>

<?php echo $form->textFieldControlGroup($model, 'created_at', array('class' => 'span5'));?>

<?php echo $form->textFieldControlGroup($model, 'updated_at', array('class' => 'span5'));?>
<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType' => 'submit',
		'type'       => 'primary',
		'label'      => Yii::t('app', 'Search'),
	));?>
</div>

<?php $this->endWidget();?>
