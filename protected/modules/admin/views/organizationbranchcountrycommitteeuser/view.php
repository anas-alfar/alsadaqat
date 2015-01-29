<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Country Committee Users')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'List Branch Country Committee User'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Create Branch Country Committee User'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Update Branch Country Committee User'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Delete Branch Country Committee User'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Manage Branch Country Committee User'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountryCommitteeUser', 'View Organization Branch Country Committee User')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
            'name'  => 'organization_branch_country_committee_id',
            'value' => $model->organizationBranchCountryCommittee->name
        ),
        array(
            'name'  => 'organization_user_id',
            'value' => $model->organizationUser->fullname
        ),
        array(
            'name'  => 'organization_position_id',
            'value' => $model->organizationPosition->title
        ),
        array(
            'name'  => 'owner_id',
            'value' => $model->owner->fullname
        ),
		'created_at',
		'updated_at',
	),
)); ?>
