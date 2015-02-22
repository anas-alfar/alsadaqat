<?php
    $this->pageTitle    = Yii::app()->name . ' - ' . $title;
    $this->breadcrumbs  = array( $title );
?>

<h1><?php echo Yii::t('app', $title); ?></h1>

<div class="form"> 
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'confirm-form',
        'action' => $url,
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
        'htmlOptions' => array(
            'class' => 'well',
        ),
    )); ?>

        <p class="note"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required'); ?></p>

            <?php echo $form->textFieldControlGroup($model, 'username', array('class'=>'span5', 'maxlength'=>32)); ?>

        <div class="form-actions">
            <?php echo TbHtml::submitButton( Yii::t('app', 'Reset'), array(
                'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
                'size'=>TbHtml::BUTTON_SIZE_LARGE,
            )); ?>
        </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->