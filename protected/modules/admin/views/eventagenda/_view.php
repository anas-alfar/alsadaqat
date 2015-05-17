<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id'));?>:</b>
<?php echo CHtml::encode( $widget->dataProvider->pagination->offset + $index+1 ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_id'));?>:</b>
<?php echo CHtml::link(CHtml::encode($data->event_id), array('view', 'id' => $data->id));?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title'));?>:</b>
<?php echo CHtml::encode(Yii::t('enumItem', $data->title));?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time'));?>:</b>
<?php echo CHtml::encode($data->start_time);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time'));?>:</b>
<?php echo CHtml::encode($data->end_time);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('venue_name'));?>:</b>
<?php echo CHtml::encode($data->venue_name);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('day_number'));?>:</b>
<?php echo CHtml::encode($data->day_number);?>
<br />

<?php /*
<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
<?php echo CHtml::encode($data->created_at); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
<?php echo CHtml::encode($data->updated_at); ?>
<br />

 */?>

</div>