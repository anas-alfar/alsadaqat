<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Access Level Permissions')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'List Access Level Permission'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'Manage AccessLevel Permission'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationAccessLevelPermission', 'Create Access Level Permission')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>