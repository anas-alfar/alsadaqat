<?php
$this->breadcrumbs=array(
	'Organization User Access Levels'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrganizationUserAccessLevel','url'=>array('index')),
	array('label'=>'Create OrganizationUserAccessLevel','url'=>array('create')),
	array('label'=>'View OrganizationUserAccessLevel','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage OrganizationUserAccessLevel','url'=>array('admin')),
);
?>

<h1>Update OrganizationUserAccessLevel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>