<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode( $widget->dataProvider->pagination->offset + $index+1 ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('construction_cost')); ?>:</b>
	<?php echo CHtml::encode($data->construction_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('construction_time')); ?>:</b>
	<?php echo CHtml::encode($data->construction_time); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_people')); ?>:</b>
    <?php echo CHtml::encode($data->number_of_people); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('agent_id')); ?>:</b>
    <?php //echo CHtml::encode($data->mosqueAgentgentFilter($data)); ?>
    <?php echo CHtml::encode($data->agent->company_name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('owner_id')); ?>:</b>
    <?php echo CHtml::encode($data->owner->fullname); ?>
    <br />

</div>