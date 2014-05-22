<?php
$this->breadcrumbs=array(
	'Organization Branch Country Committees'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List OrganizationBranchCountryCommittee','url'=>array('index')),
	array('label'=>'Create OrganizationBranchCountryCommittee','url'=>array('create')),
	array('label'=>'View OrganizationBranchCountryCommittee','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage OrganizationBranchCountryCommittee','url'=>array('admin')),
);
?>

<h1>Update OrganizationBranchCountryCommittee <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>