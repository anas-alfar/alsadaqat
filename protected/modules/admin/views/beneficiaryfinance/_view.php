<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode( $widget->dataProvider->pagination->offset + $index+1 ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('has_supplies_card')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->has_supplies_card),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_paterfamilias')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_paterfamilias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_beneficiary_business')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_beneficiary_business); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_beneficiary_family_business')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_beneficiary_family_business); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_social_security')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_social_security); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_retirement')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_retirement); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_lands')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_lands); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_property')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_property); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_agriculture')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_agriculture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_national_aid_fund')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_national_aid_fund); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_zakat_fund')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_zakat_fund); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_from_charity_fund')); ?>:</b>
	<?php echo CHtml::encode($data->income_from_charity_fund); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_total')); ?>:</b>
	<?php echo CHtml::encode($data->income_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_home_rent')); ?>:</b>
	<?php echo CHtml::encode($data->spending_home_rent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_food')); ?>:</b>
	<?php echo CHtml::encode($data->spending_food); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_clothes')); ?>:</b>
	<?php echo CHtml::encode($data->spending_clothes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_medication')); ?>:</b>
	<?php echo CHtml::encode($data->spending_medication); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_smoking')); ?>:</b>
	<?php echo CHtml::encode($data->spending_smoking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_education')); ?>:</b>
	<?php echo CHtml::encode($data->spending_education); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_transportation')); ?>:</b>
	<?php echo CHtml::encode($data->spending_transportation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_gas_invoice')); ?>:</b>
	<?php echo CHtml::encode($data->spending_gas_invoice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_water_invoice')); ?>:</b>
	<?php echo CHtml::encode($data->spending_water_invoice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_elctricity_invoice')); ?>:</b>
	<?php echo CHtml::encode($data->spending_elctricity_invoice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_kerosene')); ?>:</b>
	<?php echo CHtml::encode($data->spending_kerosene); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_other')); ?>:</b>
	<?php echo CHtml::encode($data->spending_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spending_total')); ?>:</b>
	<?php echo CHtml::encode($data->spending_total); ?>
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