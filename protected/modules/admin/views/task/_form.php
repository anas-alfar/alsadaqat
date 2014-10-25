<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'task-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'class' => 'well',
    ),
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldControlGroup($model,'organization_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'description',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php //echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'assignee_id', $model->getOrganizationUsersByOrganizationId(), array('class'=>'span5', 'maxlength'=>11)); ?>
	<?php //echo $form->textFieldControlGroup($model,'assignee_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'status', ENUMHtml::enumItem($model, 'status'), array('class'=>'span5', 'maxlength'=>11)); ?>

    <?php
        $startTime = $this->widget('yiiwheels.widgets.datetimepicker.WhDateTimePicker', array(
            'model' => $model,
            'attribute' => 'start_at',
            //'name'      => 'end_at',
            'pluginOptions' => array(
                'language' => (Yii::app()->language == 'ar') ? Yii::app()->language : '',
                'format' => 'yyyy-MM-dd hh:mm:ss'
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>
    <?php echo TbHtml::customActiveControlGroup($startTime, $model, 'start_at'); ?>
    <?php $form->error($model, 'start_at')?>
	<?php //echo $form->textFieldControlGroup($model,'start_at',array('class'=>'span5')); ?>

    <?php
        $endTime = $this->widget('yiiwheels.widgets.datetimepicker.WhDateTimePicker', array(
            'model' => $model,
            'attribute' => 'end_at',
            //'name'      => 'end_at',
            'pluginOptions' => array(
                'language' => (Yii::app()->language == 'ar') ? Yii::app()->language : '',
                'format' => 'yyyy-MM-dd hh:mm:ss'
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>
    <?php echo TbHtml::customActiveControlGroup($endTime, $model, 'end_at'); ?>
    <?php $form->error($model, 'end_at')?>
	<?php //echo $form->textFieldControlGroup($model,'end_at',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
