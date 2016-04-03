<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Committees')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'List Branch Committee'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Create Branch Committee'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Update Branch Committee'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Delete Branch Committee'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Manage Branch Committee'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountryCommittee', 'View Organization Branch Committee')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
            'name'  => 'organization_branch_id',
            'value' => $model->organizationBranch->name
            //'value' => (Yii::app()->language == 'ar') ? $model->organizationBranchCountry->country->name_ar : $model->organizationBranchCountry->country->name
        ),
		'name',
		'description',
		'agenda',
		'annual_plan',
		array(
            'name'  => 'owner_id',
            'value' => isset($model->owner) ? $model->owner->fullname : ''
        ),
		'created_at',
		'updated_at',
	),
)); ?>
