<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id'));?>:</b>
<?php echo CHtml::encode( $widget->dataProvider->pagination->offset + $index+1 ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organization_id'));?>:</b>
<?php echo CHtml::link(CHtml::encode($data->organization->name), array('view', 'id' => $data->id));?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title'));?>:</b>
<?php echo CHtml::encode(Yii::t('enumItem', $data->title));?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description'));?>:</b>
<?php echo CHtml::encode($data->description);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualifications'));?>:</b>
<?php echo CHtml::encode($data->qualifications);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsibilities'));?>:</b>
<?php echo CHtml::encode($data->responsibilities);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_id'));?>:</b>
<?php echo isset($data->owner) ? CHtml::encode($data->owner->fullname) : '';?>
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