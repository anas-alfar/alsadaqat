<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paterfamilias_first_name')); ?>:</b>
	<?php echo CHtml::encode($data->paterfamilias_first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paterfamilias_middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->paterfamilias_middle_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paterfamilias_grandfather_name')); ?>:</b>
	<?php echo CHtml::encode($data->paterfamilias_grandfather_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paterfamilias_family_name')); ?>:</b>
	<?php echo CHtml::encode($data->paterfamilias_family_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paterfamilias_date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->paterfamilias_date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ssn')); ?>:</b>
	<?php echo CHtml::encode($data->ssn); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficiary_relation_id')); ?>:</b>
	<?php echo CHtml::encode($data->beneficiary_relation_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficiary_id')); ?>:</b>
	<?php echo CHtml::encode($data->beneficiary_id); ?>
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