<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branches')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranch', 'List Organization Branch'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranch', 'Create Organization Branch'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranch', 'View Organization Branch'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranch', 'Manage Organization Branch'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranch', 'Update Organization Branch')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>