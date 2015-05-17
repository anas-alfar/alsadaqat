<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode( $widget->dataProvider->pagination->offset + $index+1 ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('husband_full_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->husband_full_name),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('husband_job')); ?>:</b>
	<?php echo CHtml::encode($data->husband_job); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('husband_date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->husband_date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('husband_date_of_death')); ?>:</b>
	<?php echo CHtml::encode($data->husband_date_of_death); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('husband_reason_of_death')); ?>:</b>
	<?php echo CHtml::encode($data->husband_reason_of_death); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('husband_death_certificate_path')); ?>:</b>
	<?php echo CHtml::encode($data->husband_death_certificate_path); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_sons')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_sons); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_daughters')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_daughters); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficiary_id')); ?>:</b>
	<?php echo CHtml::encode($data->beneficiaryFullNameFilter($data)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_id')); ?>:</b>
	<?php echo CHtml::encode($data->owner_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>