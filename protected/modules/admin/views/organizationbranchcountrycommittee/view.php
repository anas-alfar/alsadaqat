<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Country Committees')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'List Branch Country Committee'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Create Branch Country Committee'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Update Branch Country Committee'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Delete Branch Country Committee'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Manage Branch Country Committee'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountryCommittee', 'View Organization Branch Country Committee')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
            'name'  => 'organization_branch_country_id',
            'value' => (Yii::app()->language == 'ar') ? $model->organizationBranchCountry->country->name_ar : $model->organizationBranchCountry->country->name
        ),
		'name',
		'description',
		'agenda',
		'annual_plan',
		array(
            'name'  => 'owner_id',
            'value' => $model->owner->fullname
        ),
		'created_at',
		'updated_at',
	),
)); ?>
