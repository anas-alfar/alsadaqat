<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode( $widget->dataProvider->pagination->offset + $index+1 ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_full_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->father_full_name),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_father_alive')); ?>:</b>
	<?php echo CHtml::encode($data->is_father_alive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_job')); ?>:</b>
	<?php echo CHtml::encode($data->father_job); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->father_date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_date_of_death')); ?>:</b>
	<?php echo CHtml::encode($data->father_date_of_death); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_reason_of_death')); ?>:</b>
	<?php echo CHtml::encode($data->father_reason_of_death); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('father_death_certificate_path')); ?>:</b>
	<?php echo CHtml::encode($data->father_death_certificate_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_full_name')); ?>:</b>
	<?php echo CHtml::encode($data->mother_full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_mother_alive')); ?>:</b>
	<?php echo CHtml::encode($data->is_mother_alive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_job')); ?>:</b>
	<?php echo CHtml::encode($data->mother_job); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->mother_date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_date_of_death')); ?>:</b>
	<?php echo CHtml::encode($data->mother_date_of_death); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_reason_of_death')); ?>:</b>
	<?php echo CHtml::encode($data->mother_reason_of_death); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_death_certificate_path')); ?>:</b>
	<?php echo CHtml::encode($data->mother_death_certificate_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_brothers')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_brothers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_sisters')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_sisters); ?>
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