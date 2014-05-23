<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Activities')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('EventActivity', 'List Event Activity'),'url'=>array('index')),
	array('label'=>Yii::t('EventActivity', 'Create Event Activity'),'url'=>array('create')),
	array('label'=>Yii::t('EventActivity', 'Update Event Activity'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('EventActivity', 'Delete Event Activity'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('EventActivity', 'Manage Event Activity'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventActivity', 'View Event Activity')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'title',
		'description',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
