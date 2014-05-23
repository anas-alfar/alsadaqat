<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Country Committees')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'List Branch Country Committee'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Manage Branch Country Committee'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountryCommittee', 'Create Organization Branch Country Committee')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>