<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Types')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('EventType', 'List Event Type'),'url'=>array('index')),
	array('label'=>Yii::t('EventType', 'Create Event Type'),'url'=>array('create')),
	array('label'=>Yii::t('EventType', 'Update Event Type'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('EventType', 'Delete Event Type'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('EventType', 'Manage Event Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventType', 'View Event Type')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'title',
		'description',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
