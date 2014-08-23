<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mail-outbox-form',
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

	<?php echo $form->textFieldControlGroup($model,'mail_template_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'number',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'from_mail',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'from_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'from_department',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'to_mail',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'to_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'to_department',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'subject',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaControlGroup($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>


    <?php
        $sendAt = $this->widget('yiiwheels.widgets.datetimepicker.WhDateTimePicker', array(
            'model' => $model,
            'attribute' => 'send_at',
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
    <?php echo TbHtml::customActiveControlGroup($sendAt, $model, 'send_at'); ?>
    <?php $form->error($model, 'send_at')?>
	<?php //echo $form->textFieldControlGroup($model,'send_at',array('class'=>'span5')); ?>



	<?php //echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'), array(
            'color'=> TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

<?php $this->endWidget(); ?>
