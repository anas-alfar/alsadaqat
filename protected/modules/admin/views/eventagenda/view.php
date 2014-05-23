<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Agendas')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('EventAgenda', 'List Event Agenda'),'url'=>array('index')),
	array('label'=>Yii::t('EventAgenda', 'Create Event Agenda'),'url'=>array('create')),
	array('label'=>Yii::t('EventAgenda', 'Update Event Agenda'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('EventAgenda', 'Delete Event Agenda'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('EventAgenda', 'Manage Event Agenda'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventAgenda', 'View Event Agenda')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'title',
		'start_time',
		'end_time',
		'venue_name',
		'day_number',
		'created_at',
		'updated_at',
	),
)); ?>
