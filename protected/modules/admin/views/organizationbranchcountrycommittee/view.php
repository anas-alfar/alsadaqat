<?php
$this->breadcrumbs=array(
	'Organization Branch Country Committees'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List OrganizationBranchCountryCommittee','url'=>array('index')),
	array('label'=>'Create OrganizationBranchCountryCommittee','url'=>array('create')),
	array('label'=>'Update OrganizationBranchCountryCommittee','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrganizationBranchCountryCommittee','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationBranchCountryCommittee','url'=>array('admin')),
);
?>

<h1>View OrganizationBranchCountryCommittee #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_branch_country_id',
		'name',
		'description',
		'agenda',
		'annual_plan',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
