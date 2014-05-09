<?php
$this->breadcrumbs=array(
	'Beneficiary Student Classes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BeneficiaryStudentClass','url'=>array('index')),
	array('label'=>'Create BeneficiaryStudentClass','url'=>array('create')),
	array('label'=>'Update BeneficiaryStudentClass','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BeneficiaryStudentClass','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BeneficiaryStudentClass','url'=>array('admin')),
);
?>

<h1>View BeneficiaryStudentClass #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'class_name',
		'major_name',
		'school_name',
		'address',
		'start_at',
		'end_at',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
