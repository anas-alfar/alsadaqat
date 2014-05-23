<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branches')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranch', 'List Organization Branch'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranch', 'Manage Organization Branch'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranch', 'Create Organization Branch')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>