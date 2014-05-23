<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Tasks')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('Task', 'List Task'),'url'=>array('index')),
	array('label'=>Yii::t('Task', 'Create Task'),'url'=>array('create')),
	array('label'=>Yii::t('Task', 'Update Task'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('Task', 'Delete Task'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('Task', 'Manage Task'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Task', 'View Task')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'title',
		'description',
		'owner_id',
		'assignee_id',
		'status',
		'start_at',
		'end_at',
		'created_at',
		'updated_at',
	),
)); ?>
