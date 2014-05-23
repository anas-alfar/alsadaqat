<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Country Committee Users')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'List Branch Country Committee User'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Create Branch Country Committee User'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'View Branch Country Committee User'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Manage Branch Country Committee User'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountryCommitteeUser', 'Update Organization Branch Country Committee User')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>