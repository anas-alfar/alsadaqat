<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode( $widget->dataProvider->pagination->offset + $index+1 ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->countryFilter($data)),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_ar')); ?>:</b>
	<?php echo CHtml::encode($data->name_ar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('published')); ?>:</b>
	<?php echo Yii::t('enumItem',CHtml::encode($data->published)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('population_count')); ?>:</b>
    <?php echo CHtml::encode($data->population_count); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('houses_count')); ?>:</b>
    <?php echo CHtml::encode($data->houses_count); ?>
    <br />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('distance_to_capital')); ?>:</b>
    <?php echo CHtml::encode($data->distance_to_capital); ?>
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />


</div>