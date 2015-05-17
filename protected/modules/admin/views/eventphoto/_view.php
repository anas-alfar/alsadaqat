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

	<b><?php echo CHtml::encode($data->getAttributeLabel('size'));?>:</b>
<?php echo CHtml::encode($data->size);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_path'));?>:</b>
<?php echo CHtml::encode($data->source_path);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_url'));?>:</b>
<?php echo CHtml::encode($data->source_url);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_id'));?>:</b>
<?php echo CHtml::encode($data->owner_id);?>
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