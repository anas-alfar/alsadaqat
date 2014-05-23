<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Photos')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('EventPhoto', 'List Event Photo'),'url'=>array('index')),
	array('label'=>Yii::t('EventPhoto', 'Create Event Photo'),'url'=>array('create')),
	array('label'=>Yii::t('EventPhoto', 'Update Event Photo'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('EventPhoto', 'Delete Event Photo'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('EventPhoto', 'Manage Event Photo'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventPhoto', 'View Event Photo')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'title',
		'size',
		'source_path',
		'source_url',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
