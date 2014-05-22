<?php
$this->breadcrumbs=array(
	'Organization Access Level Permissions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List OrganizationAccessLevelPermission','url'=>array('index')),
	array('label'=>'Create OrganizationAccessLevelPermission','url'=>array('create')),
	array('label'=>'View OrganizationAccessLevelPermission','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage OrganizationAccessLevelPermission','url'=>array('admin')),
);
?>

<h1>Update OrganizationAccessLevelPermission <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>