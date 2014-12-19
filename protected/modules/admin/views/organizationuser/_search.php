<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'action'      => Yii::app()->createUrl($this->route),
		'method'      => 'get',
		'htmlOptions' => array(
			'class'      => 'well',
		),
	));?>

<?php echo $form->textFieldControlGroup($model, 'id', array('class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->textFieldControlGroup($model, 'username', array('class' => 'span5', 'maxlength' => 32));?>

<?php echo $form->dropDownListControlGroup($model, 'title', ENUMHtml::enumItem($model, 'title'), array('class' => 'span5', 'maxlength' => 255));?>

<?php echo $form->textFieldControlGroup($model, 'fullname', array('class' => 'span5', 'maxlength' => 255));?>

<?php echo $form->textFieldControlGroup($model, 'ssn', array('class' => 'span5', 'maxlength' => 32));?>

<?php echo $form->dropDownListControlGroup($model, 'gender', ENUMHtml::enumItem($model, 'gender'), array('class' => 'span5', 'maxlength' => 6));?>

<?php echo $form->textFieldControlGroup($model, 'email', array('class' => 'span5', 'maxlength' => 255));?>

<?php echo $form->textFieldControlGroup($model, 'date_of_birth', array('class' => 'span5'));?>

<?php echo $form->textFieldControlGroup($model, 'home_phone', array('class' => 'span5', 'maxlength' => 17));?>

<?php echo $form->textFieldControlGroup($model, 'work_phone', array('class' => 'span5', 'maxlength' => 17));?>

<?php echo $form->textFieldControlGroup($model, 'local_mobile', array('class' => 'span5', 'maxlength' => 17));?>

<?php echo $form->textFieldControlGroup($model, 'international_mobile', array('class' => 'span5', 'maxlength' => 17));?>

<?php echo $form->dropDownListControlGroup($model, 'nationality_id', Country::model()->getOptions(), array('empty' => $model->getAttributeLabel('nationality_id'), 'class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->textFieldControlGroup($model, 'organization_id', array('class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->dropDownListControlGroup($model, 'organization_branch_id', OrganizationBranch::model()->getOptions(), array('empty' => $model->getAttributeLabel('organization_branch_id'), 'class' => 'span5', 'maxlength' => 11));?>

<?php echo $form->textFieldControlGroup($model, 'personal_photo_path', array('class' => 'span5', 'maxlength' => 255));?>

<?php echo $form->textFieldControlGroup($model, 'passport_photo_path', array('class' => 'span5', 'maxlength' => 255));?>

<?php echo $form->dropDownListControlGroup($model, 'blocked', ENUMHtml::enumItem($model, 'blocked'), array('class' => 'span5', 'maxlength' => 3));?>

<?php echo $form->textFieldControlGroup($model, 'last_login_date', array('class' => 'span5'));?>

<?php echo $form->textFieldControlGroup($model, 'last_login_ip', array('class' => 'span5', 'maxlength' => 15));?>

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
