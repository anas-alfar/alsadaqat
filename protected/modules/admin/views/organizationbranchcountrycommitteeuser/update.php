<?php
$this->breadcrumbs=array(
	'Organization Branch Country Committee Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List OrganizationBranchCountryCommitteeUser','url'=>array('index')),
	array('label'=>'Create OrganizationBranchCountryCommitteeUser','url'=>array('create')),
	array('label'=>'View OrganizationBranchCountryCommitteeUser','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage OrganizationBranchCountryCommitteeUser','url'=>array('admin')),
);
?>

<h1>Update OrganizationBranchCountryCommitteeUser <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>