<?php
$this->breadcrumbs=array(
	'Organization Branch Countries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrganizationBranchCountry','url'=>array('index')),
	array('label'=>'Create OrganizationBranchCountry','url'=>array('create')),
	array('label'=>'Update OrganizationBranchCountry','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrganizationBranchCountry','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationBranchCountry','url'=>array('admin')),
);
?>

<h1>View OrganizationBranchCountry #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_branch_id',
		array('name'  => 'country_id','value' => array($model, 'countryFilter')),
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
