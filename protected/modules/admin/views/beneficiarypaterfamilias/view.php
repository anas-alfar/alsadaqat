<?php
$this->breadcrumbs=array(
	'Beneficiary Paterfamiliases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BeneficiaryPaterfamilias','url'=>array('index')),
	array('label'=>'Create BeneficiaryPaterfamilias','url'=>array('create')),
	array('label'=>'Update BeneficiaryPaterfamilias','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BeneficiaryPaterfamilias','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BeneficiaryPaterfamilias','url'=>array('admin')),
);
?>

<h1>View BeneficiaryPaterfamilias #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'paterfamilias_first_name',
		'paterfamilias_middle_name',
		'paterfamilias_grandfather_name',
		'paterfamilias_family_name',
		'paterfamilias_date_of_birth',
		'ssn',
		'beneficiary_relation_id',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
