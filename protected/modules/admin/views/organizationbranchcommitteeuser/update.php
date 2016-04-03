<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Committee Users')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'List Branch Committee User'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Create Branch Committee User'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'View Branch Committee User'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Manage Branch Committee User'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountryCommitteeUser', 'Update Organization Branch Committee User')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>