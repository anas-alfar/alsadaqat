<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('construction_area')); ?>:</b>
	<?php echo CHtml::encode($data->construction_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('construction_cost')); ?>:</b>
	<?php echo CHtml::encode($data->construction_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('construction_time')); ?>:</b>
	<?php echo CHtml::encode($data->construction_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('construction_type')); ?>:</b>
	<?php echo CHtml::encode($data->construction_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('furniture_type')); ?>:</b>
	<?php echo CHtml::encode($data->furniture_type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_people')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_people); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_restrooms')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_restrooms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_floors')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_floors); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_entrances')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_entrances); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_female_area')); ?>:</b>
	<?php echo CHtml::encode($data->has_female_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_sound_system')); ?>:</b>
	<?php echo CHtml::encode($data->has_sound_system); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_air_condition')); ?>:</b>
	<?php echo CHtml::encode($data->has_air_condition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agent_id')); ?>:</b>
	<?php echo CHtml::encode($data->agent_id); ?>
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