<?php
$this->breadcrumbs=array(
	'Beneficiary Relations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BeneficiaryRelation','url'=>array('index')),
	array('label'=>'Create BeneficiaryRelation','url'=>array('create')),
	array('label'=>'Update BeneficiaryRelation','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BeneficiaryRelation','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BeneficiaryRelation','url'=>array('admin')),
);
?>

<h1>View BeneficiaryRelation #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
