<?php
$this->breadcrumbs=array(
	'Beneficiary Teachers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BeneficiaryTeacher','url'=>array('index')),
	array('label'=>'Create BeneficiaryTeacher','url'=>array('create')),
	array('label'=>'Update BeneficiaryTeacher','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BeneficiaryTeacher','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BeneficiaryTeacher','url'=>array('admin')),
);
?>

<h1>View BeneficiaryTeacher #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'scientific_degree',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
