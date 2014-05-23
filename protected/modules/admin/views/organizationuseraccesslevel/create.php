<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization User Access Levels')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'List User Access Level'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'Manage User Access Level'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationUserAccessLevel', 'Create Organization User Access Level')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>