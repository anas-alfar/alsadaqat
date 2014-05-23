<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Access Level Permissions')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'List Access Level Permission'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'Create Access Level Permission'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'View Access Level Permission'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'Manage Access Level Permission'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationAccessLevelPermission', 'Update Access Level Permission')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>