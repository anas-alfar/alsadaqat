<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id'));?>:</b>
<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id));?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organization_id'));?>:</b>
<?php echo CHtml::encode($data->organization_id);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title'));?>:</b>
<?php echo CHtml::encode(Yii::t('enumItem', $data->title));?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description'));?>:</b>
<?php echo CHtml::encode($data->description);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at'));?>:</b>
<?php echo CHtml::encode($data->created_at);?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at'));?>:</b>
<?php echo CHtml::encode($data->updated_at);?>
	<br />


</div>