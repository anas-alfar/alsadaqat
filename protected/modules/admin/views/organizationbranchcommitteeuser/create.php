<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Committee Users')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'List Branch Committee User'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountryCommitteeUser', 'Manage Branch Committee User'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountryCommitteeUser', 'Create Organization Branch Committee User')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>