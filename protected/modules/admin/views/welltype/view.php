<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Well Types')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('WellType', 'List Well Type'),'url'=>array('index')),
	array('label'=>Yii::t('WellType', 'Create Well Type'),'url'=>array('create')),
	array('label'=>Yii::t('WellType', 'Update Well Type'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('WellType', 'Delete Well Type'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('WellType', 'Manage Well Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('WellType', 'View Well Type')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'construction_cost',
		'construction_time',
		'number_of_people',
        array(
            'name'  => 'agent_id',
            'value' => $model->agent->company_name 
        ),
        array(
            'name'  => 'owner_id',
            'value' => $model->owner->fullname 
        ),
		'created_at',
		'updated_at',
	),
)); ?>
