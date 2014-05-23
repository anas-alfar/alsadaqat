<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Access Levels')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationAccessLevel', 'List Organization Access Level'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationAccessLevel', 'Manage Organization Access Level'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationAccessLevel', 'Create Organization Access Level')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>