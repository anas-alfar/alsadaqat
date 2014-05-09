<?php
$this->breadcrumbs=array(
	'Beneficiary Family Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BeneficiaryFamilyMembers','url'=>array('index')),
	array('label'=>'Create BeneficiaryFamilyMembers','url'=>array('create')),
	array('label'=>'Update BeneficiaryFamilyMembers','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BeneficiaryFamilyMembers','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BeneficiaryFamilyMembers','url'=>array('admin')),
);
?>

<h1>View BeneficiaryFamilyMembers #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'full_name',
		'ssn',
		'date_of_birth',
		'beneficiary_relation_id',
		'marital_status',
		'educational_status',
		'health_status',
		'business',
		'other',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
