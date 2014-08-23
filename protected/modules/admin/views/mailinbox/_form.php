<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mail-inbox-form',
    'enableAjaxValidation'   => false,
    'enableClientValidation' => true,
    'htmlOptions' => array(
        'class' => 'well',
    ),
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'afterValidate'    => 'js:function(form, data, hasError) {
            if(hasError) {
              for(var i in data){
                $("html, body").animate({
                  scrollTop: $("div.error").offset().top - 100
                 }, 1000);
                 return false;
              } 
           }else{
            return true;
           }
        }',
    ),
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldControlGroup($model,'organization_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'mail_type_id', MailType::model()->getOptions(), array('empty' =>$model->getAttributeLabel('mail_type_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'number',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'from_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'from_department',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'subject',array('class'=>'span5','maxlength'=>255)); ?>


    <?php
        $receivedAt = $this->widget('yiiwheels.widgets.datetimepicker.WhDateTimePicker', array(
            'model' => $model,
            'attribute' => 'received_at',
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
    <?php echo TbHtml::customActiveControlGroup($receivedAt, $model, 'received_at'); ?>
    <?php $form->error($model, 'received_at')?>
	<?php //echo $form->textFieldControlGroup($model,'received_at',array('class'=>'span5')); ?>


	<?php //echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'mail_attachment_id',array('class'=>'span5','maxlength'=>11)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'), array(
            'color'=> TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

<?php $this->endWidget(); ?>
