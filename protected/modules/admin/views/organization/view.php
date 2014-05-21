<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organizations') => array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=> Yii::t('organization', 'List Organization'), 'url'=>array('index')),
	array('label'=> Yii::t('organization', 'Create Organization'), 'url'=>array('create')),
	array('label'=> Yii::t('organization', 'Update Organization'), 'url'=>array('update','id'=>$model->id)),
	array('label'=> Yii::t('organization', 'Delete Organization'), 'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=> Yii::t('app', 'Are you sure you want to delete this item?') )),
	array('label'=> Yii::t('organization', 'Manage Organization'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('organization', 'View Organization') ?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'organization_type_id',
        array(
            'name'  => 'organization_type_id',
            'value' => array($model, 'organizationTypeFilter'), 
        ),
		'name',
		'description',
		'created_at',
		'updated_at',
		'notes',
		'options',
	),
)); ?>
