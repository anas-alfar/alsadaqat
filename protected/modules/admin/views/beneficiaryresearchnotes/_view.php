<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('support_type')); ?>:</b>
	<?php echo CHtml::encode($data->support_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('support_period')); ?>:</b>
	<?php echo CHtml::encode($data->support_period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expected_support_period')); ?>:</b>
	<?php echo CHtml::encode($data->expected_support_period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('support_modality')); ?>:</b>
	<?php echo CHtml::encode($data->support_modality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('information_source')); ?>:</b>
	<?php echo CHtml::encode($data->information_source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_small_business_idea')); ?>:</b>
	<?php echo CHtml::encode($data->has_small_business_idea); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('small_business_idea_description')); ?>:</b>
	<?php echo CHtml::encode($data->small_business_idea_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('researcher_recommendations')); ?>:</b>
	<?php echo CHtml::encode($data->researcher_recommendations); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('researcher_name')); ?>:</b>
	<?php echo CHtml::encode($data->researcher_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('committee_recommendations')); ?>:</b>
	<?php echo CHtml::encode($data->committee_recommendations); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('committee_member_name')); ?>:</b>
	<?php echo CHtml::encode($data->committee_member_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('committee_manager_name')); ?>:</b>
	<?php echo CHtml::encode($data->committee_manager_name); ?>
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