<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Country Committees')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'List Branch Country Committee'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Create Branch Country Committee'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'View Branch Country Committee'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranchCountryCommittee', 'Manage Branch Country Committee'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountryCommittee', 'Update Organization Branch Country Committee')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>