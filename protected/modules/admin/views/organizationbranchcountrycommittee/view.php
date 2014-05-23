<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Country Committees')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'List Branch Country Committee'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Create Branch Country Committee'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Update Branch Country Committee'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Delete Branch Country Committee'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Manage Branch Country Committee'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountryCommittee', 'View Organization Branch Country Committee')?> #<?php echo $model->id; ?></h1>

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
