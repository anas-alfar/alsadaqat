<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ssn')); ?>:</b>
	<?php echo CHtml::encode($data->ssn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_phone')); ?>:</b>
	<?php echo CHtml::encode($data->home_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_phone')); ?>:</b>
	<?php echo CHtml::encode($data->work_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('local_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->local_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('international_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->international_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nationality_id')); ?>:</b>
	<?php echo CHtml::encode($data->countryFilter($data, 'nationality_id')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organization_id')); ?>:</b>
	<?php echo CHtml::encode($data->organization_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organization_branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->organization_branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personal_photo_path')); ?>:</b>
	<?php echo CHtml::encode($data->personal_photo_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passport_photo_path')); ?>:</b>
	<?php echo CHtml::encode($data->passport_photo_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blocked')); ?>:</b>
	<?php echo CHtml::encode($data->blocked); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login_date')); ?>:</b>
	<?php echo CHtml::encode($data->last_login_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login_ip')); ?>:</b>
	<?php echo CHtml::encode($data->last_login_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>