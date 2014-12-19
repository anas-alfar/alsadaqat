<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'action'      => Yii::app()->createUrl($this->route),
		'method'      => 'get',
		'htmlOptions' => array(
			'class'      => 'well',
		),
	));?>

<?php echo $form->textFieldControlGroup($model, 'id', array('class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->textFieldControlGroup($model, 'organization_id', array('class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->dropDownListControlGroup($model, 'title', ENUMHtml::enumItem($model, 'title'), array('class' => 'span5', 'maxlength' => 255));?>

<?php echo $form->textFieldControlGroup($model, 'description', array('class' => 'span5', 'maxlength' => 1024));?>

<?php echo $form->textFieldControlGroup($model, 'number_of_days', array('class' => 'span5'));?>

<?php echo $form->dropDownListControlGroup($model, 'event_type_id', EventType::model()->getOptions(), array('empty' => $model->getAttributeLabel('event_type_id'), 'class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->dropDownListControlGroup($model, 'country_id', Country::model()->getOptions(), array('empty' => $model->getAttributeLabel('country_id'), 'class' => 'span5', 'maxlength' => 11, 'onChange' => "updateCitiesDropDown( this.value, 'Event_city_id','".$model->getAttributeLabel('city')."')"));?>

<?php echo $form->dropDownListControlGroup($model, 'city_id', array(), array('empty' => $model->getAttributeLabel('city_id'), 'class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->textFieldControlGroup($model, 'address', array('class' => 'span5', 'maxlength' => 255));?>

<?php echo $form->dropDownListControlGroup($model, 'status', ENUMHtml::enumItem($model, 'status'), array('class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->textFieldControlGroup($model, 'start_at', array('class' => 'span5'));?>

<?php echo $form->textFieldControlGroup($model, 'end_at', array('class' => 'span5'));?>

<?php echo $form->dropDownListControlGroup($model, 'published', ENUMHtml::enumItem($model, 'published'), array('class' => 'span5', 'maxlength' => 3));?>

<?php echo $form->dropDownListControlGroup($model, 'approved', ENUMHtml::enumItem($model, 'approved'), array('class' => 'span5', 'maxlength' => 3));?>

<?php echo $form->textFieldControlGroup($model, 'owner_id', array('class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->textFieldControlGroup($model, 'created_at', array('class' => 'span5'));?>

<?php echo $form->textFieldControlGroup($model, 'updated_at', array('class' => 'span5'));?>

<?php echo $form->textFieldControlGroup($model, 'notes', array('class' => 'span5', 'maxlength' => 1024));?>

<?php echo $form->textFieldControlGroup($model, 'options', array('class' => 'span5', 'maxlength' => 1024));?>
<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType' => 'submit',
		'type'       => 'primary',
		'label'      => Yii::t('app', 'Search'),
	));?>
</div>

<?php $this->endWidget();?>
