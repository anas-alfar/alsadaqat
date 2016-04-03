<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Committees')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'List Branch Committee'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Manage Branch Committee'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountryCommittee', 'Create Organization Branch Committee')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>