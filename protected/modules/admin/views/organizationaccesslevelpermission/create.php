<?php
$this->breadcrumbs=array(
	'Organization Access Level Permissions'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List OrganizationAccessLevelPermission','url'=>array('index')),
	array('label'=>'Manage OrganizationAccessLevelPermission','url'=>array('admin')),
);
?>

<h1>Create OrganizationAccessLevelPermission</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>