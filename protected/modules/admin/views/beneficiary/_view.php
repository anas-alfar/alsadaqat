<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?>:</b>
	<?php echo CHtml::encode($data->full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ssn')); ?>:</b>
	<?php echo CHtml::encode($data->ssn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_phone')); ?>:</b>
	<?php echo CHtml::encode($data->home_phone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personal_photo_path')); ?>:</b>
	<?php echo CHtml::encode($data->personal_photo_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nationality_id')); ?>:</b>
	<?php echo CHtml::encode($data->nationalityFilter($data)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_id')); ?>:</b>
	<?php echo CHtml::encode($data->countryFilter($data)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
	<?php echo CHtml::encode($data->city_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficiary_type')); ?>:</b>
	<?php echo CHtml::encode($data->beneficiary_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_paterfamilias')); ?>:</b>
	<?php echo CHtml::encode($data->has_paterfamilias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_family_members')); ?>:</b>
	<?php echo CHtml::encode($data->has_family_members); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_home')); ?>:</b>
	<?php echo CHtml::encode($data->has_home); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_income')); ?>:</b>
	<?php echo CHtml::encode($data->has_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organization_id')); ?>:</b>
	<?php echo CHtml::encode($data->organization_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organization_branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->organizationBranchFilter($data)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('donator_id')); ?>:</b>
	<?php echo CHtml::encode($data->donatorFilter($data)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('options')); ?>:</b>
	<?php echo CHtml::encode($data->options); ?>
	<br />

	*/ ?>

</div>