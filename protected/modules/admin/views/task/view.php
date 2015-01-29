<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Tasks')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('Task', 'List Task'),'url'=>array('index')),
	array('label'=>Yii::t('Task', 'Create Task'),'url'=>array('create')),
	array('label'=>Yii::t('Task', 'Update Task'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('Task', 'Delete Task'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('Task', 'Manage Task'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Task', 'View Task')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
            'name'  => 'organization_id',
            'value' => $model->organization->name 
        ),
		'title',
		'description',
        array(
            'name'  => 'owner_id',
            'value' => $model->owner->fullname 
        ),
        array(
            'name'  => 'assignee_id',
            'value' => $model->assignee->fullname 
        ),
        array(
            'name'  => 'status',
            'value' => Yii::t('enumItem', $model->status) 
        ),
		'start_at',
		'end_at',
		'created_at',
		'updated_at',
	),
)); ?>
