<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode( $widget->dataProvider->pagination->offset + $index+1 ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_ar')); ?>:</b>
	<?php echo CHtml::encode($data->name_ar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iso_code_2')); ?>:</b>
	<?php echo CHtml::encode($data->iso_code_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iso_code_3')); ?>:</b>
	<?php echo CHtml::encode($data->iso_code_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('published')); ?>:</b>
	<?php echo Yii::t('enumItem',CHtml::encode($data->published)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>