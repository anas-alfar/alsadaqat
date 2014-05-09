<?php
$this->breadcrumbs=array(
	'Beneficiary Widows'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BeneficiaryWidow','url'=>array('index')),
	array('label'=>'Create BeneficiaryWidow','url'=>array('create')),
	array('label'=>'Update BeneficiaryWidow','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BeneficiaryWidow','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BeneficiaryWidow','url'=>array('admin')),
);
?>

<h1>View BeneficiaryWidow #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'husband_full_name',
		'husband_job',
		'husband_date_of_birth',
		'husband_date_of_death',
		'husband_reason_of_death',
		'husband_death_certificate_path',
		'number_of_sons',
		'number_of_daughters',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
