<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'event-agenda-form',
	'enableAjaxValidation'=>false,
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

	<?php echo $form->dropDownListControlGroup($model, 'event_id', Event::model()->getOptions(), array('empty' =>$model->getAttributeLabel('event_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'title',array('class'=>'span5','maxlength'=>255)); ?>


    <?php
        $startTime = $this->widget('yiiwheels.widgets.timepicker.WhTimePicker', array(
            'model' => $model,
            'attribute' => 'start_time',
            //'name'      => 'start_at',
            'pluginOptions' => array(
                'minuteStep' => 1,
                'secondStep' => 1,
                //'template'  => 'modal',
                'showSeconds' => true,
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>
    <?php echo TbHtml::customActiveControlGroup($startTime, $model, 'start_time'); ?>
    <?php $form->error($model, 'start_time')?>
	<?php //echo $form->textFieldControlGroup($model,'start_time',array('class'=>'span5')); ?>


    <?php
        $endTime = $this->widget('yiiwheels.widgets.timepicker.WhTimePicker', array(
            'model' => $model,
            'attribute' => 'end_time',
            //'name'      => 'start_at',
            'pluginOptions' => array(
                'minuteStep' => 1,
                'secondStep' => 1,
                //'template'  => 'modal',
                'showSeconds' => true,
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>
    <?php echo TbHtml::customActiveControlGroup($endTime, $model, 'end_time'); ?>
    <?php $form->error($model, 'end_time')?>
	<?php //echo $form->textFieldControlGroup($model,'end_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'venue_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'day_number',array('class'=>'span5')); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'), array(
            'color'=> TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

<?php $this->endWidget(); ?>
