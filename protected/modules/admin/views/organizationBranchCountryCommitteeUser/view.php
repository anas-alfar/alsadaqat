<?php
$this->breadcrumbs=array(
	'Organization Branch Country Committee Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrganizationBranchCountryCommitteeUser','url'=>array('index')),
	array('label'=>'Create OrganizationBranchCountryCommitteeUser','url'=>array('create')),
	array('label'=>'Update OrganizationBranchCountryCommitteeUser','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrganizationBranchCountryCommitteeUser','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationBranchCountryCommitteeUser','url'=>array('admin')),
);
?>

<h1>View OrganizationBranchCountryCommitteeUser #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_branch_country_committee_id',
		'organization_user_id',
		'organization_position_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
